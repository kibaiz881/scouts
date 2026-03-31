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

    #[Route('/admin/settingadmin/pdf/{id}', name: 'app_admin_settingadmin_pdf')]
    #[IsGranted('ROLE_ADMIN')]
    public function generatePdf(int $id, UserRepository $userRepository): Response
    {
        // 0️⃣ Récupération sécurisée de l'utilisateur
        $user = $userRepository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        // 1️⃣ Génération du QR Code
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data(
                'User ID: ' . $user->getId() .
                    ' | Email: ' . $user->getEmail() .
                    ' | Photo: ' . $user->getProfilePictureName()
            )
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(150)
            ->margin(10)
            ->build();

        $qrCodeBase64 = base64_encode($result->getString());

        // 2️⃣ Configuration DomPDF
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $dompdf = new Dompdf($options);

        // 3️⃣ CHEMIN DES IMAGES (PUBLIC)
        $basePath = $this->getParameter('kernel.project_dir') . '/public/images/';

        $imageBase64   = $this->getBase64Image($basePath . '75hc.png');
        $imageBase641  = $this->getBase64Image($basePath . '20215.jpg');
        $imageBase642  = $this->getBase64Image($basePath . 'AIM.png'); // logo

        // ✅ PHOTO DU PROFIL EN BASE64
        $profileBase64 = '';
        if ($user->getProfilePictureName()) {
            $profilePath = $basePath . 'profiles/' . $user->getProfilePictureName();
            $profileBase64 = $this->getBase64Image($profilePath);
        }

        // 4️⃣ Génération HTML
        $html = $this->renderView('admin/settingadmin/pdf.html.twig', [
            'user' => $user,
            'qrCode' => $qrCodeBase64,
            'image_base64' => $imageBase64,
            'image_base641' => $imageBase641,
            'image_base642' => $imageBase642,
            'profileBase64' => $profileBase64, // injecté pour Twig
        ]);

        // 5️⃣ Génération PDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // 6️⃣ Retour PDF
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="user_' . $user->getId() . '.pdf"',
        ]);
    }

    // ✅ MÉTHODE UTILITAIRE
    private function getBase64Image(string $path): string
    {
        if (!file_exists($path)) {
            return ''; // évite crash si image absente
        }
        return base64_encode(file_get_contents($path));
    }
}
