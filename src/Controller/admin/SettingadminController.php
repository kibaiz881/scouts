<?php

namespace App\Controller\admin;

use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Filesystem\Filesystem;
use Knp\Component\Pager\PaginatorInterface;

final class SettingadminController extends AbstractController
{
    #[Route('/admin/settingadmin', name: 'app_admin_settingadmin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher
    ): Response {
        $currentUser = $this->getUser();

        $user = new User();
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form->get('profilePictureFile')->getData();

            if ($profilePictureFile) {
                $user->setProfilePictureFile($profilePictureFile);
                $user->setProfilePictureName($profilePictureFile->getClientOriginalName());
            }

            $user->setRoles(['ROLE_ADMIN']);
            $user->setUpdatedAt(new \DateTimeImmutable());

            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword($user, $plainPassword)
                );
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_settingadmin');
        }

        return $this->render('admin/settingadmin/index.html.twig', [
            'currentUser' => $currentUser,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/settingadmin/list', name: 'admin_setting_list')]
    #[IsGranted('ROLE_ADMIN')]
    public function list(
        UserRepository $userRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $query = $userRepository->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')
            ->getQuery();

        $userlist = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('admin/settingadmin/list.html.twig', [
            'userlist' => $userlist
        ]);
    }

    #[Route('/admin/settingadmin/edit/{id}', name: 'admin_setting_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            if ($plainPassword) {
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $plainPassword)
                );
            }

            $em->flush();

            return $this->redirectToRoute('app_admin_settingadmin');
        }

        return $this->render('admin/settingadmin/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/useradmin/delete/{id}', name: 'app_admin_user_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(User $user, EntityManagerInterface $em): JsonResponse
    {
        $filesystem = new Filesystem();
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/images/profiles/';

        if ($user->getProfilePictureName()) {
            $filePath = $uploadDir . $user->getProfilePictureName();
            if ($filesystem->exists($filePath)) {
                $filesystem->remove($filePath);
            }
        }

        $em->remove($user);
        $em->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/admin/settingadmin/view/{id}', name: 'admin_setting_view')]
    #[IsGranted('ROLE_ADMIN')]
    public function view(int $id, EntityManagerInterface $em): Response
    {
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        return $this->render('admin/settingadmin/view.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/admin/settingadmin/pdf/{id}', name: 'app_admin_settingadmin_pdf')]
    #[IsGranted('ROLE_ADMIN')]
    public function generatePdf(User $user): Response
    {
        // 1️⃣ Génération du QR code PNG
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data('User ID: ' . $user->getId() . ' | Email: ' . $user->getEmail())
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High) // ✅ Enum pour v5+
            ->size(150)
            ->margin(10)
            ->build();

        $qrCodeBase64 = base64_encode($result->getString());

        // 2️⃣ Configuration Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);

        // 3️⃣ Chargement du template Twig
        $html = $this->renderView('admin/settingadmin/pdf.html.twig', [
            'user' => $user,
            'qrCode' => $qrCodeBase64,
        ]);

        // 4️⃣ Génération du PDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // 5️⃣ Retour du PDF
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="user_' . $user->getId() . '.pdf"',
        ]);
    }
}
