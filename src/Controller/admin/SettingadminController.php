<?php

namespace App\Controller\admin;

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
            $user->setEmail($form->get('email')->getData());
            $user->setUsername($form->get('username')->getData());
            $profilePictureFile = $form->get('profilePictureFile')->getData();
            $user->setProfilePictureFile($profilePictureFile);
            $user->setProfilePictureName($profilePictureFile ? $profilePictureFile->getClientOriginalName() : null);
            $user->setAdresse($form->get('adresse')->getData());
            $user->setPhone($form->get('phone')->getData());
            $user->setLieuNaissance($form->get('lieuNaissance')->getData());
            $user->setNationalite($form->get('nationalite')->getData());
            $user->setProfession($form->get('profession')->getData());
            $user->setPaysDelivrance($form->get('paysDelivrance')->getData());
            $user->setSexe($form->get('sexe')->getData());
            $user->setDateEntrescout($form->get('dateEntrescout')->getData());
            $user->setDateNaissance($form->get('dateNaissance')->getData());
            $user->setDateDelivrance($form->get('dateDelivrance')->getData());
            $user->setSexe($form->get('sexe')->getData());
            $user->setRoles(['ROLE_ADMIN']);
            $user->setUpdatedAt(new \DateTimeImmutable());
            $user->setProfilePictureName($form->get('profilePictureFile')->getData() ? $form->get('profilePictureFile')->getData()->getClientOriginalName() : null);
            $plainPassword = $form->get('plainPassword')->getData(); // Vous pouvez laisser le mot de passe vide ou le gérer selon vos besoins
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $plainPassword)
            );
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

    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    // ❗ IMPORTANT : QueryBuilder (pas findAll)
    $query = $userRepository->createQueryBuilder('u')
        ->orderBy('u.id', 'DESC')
        ->getQuery();

    // Pagination
    $userlist = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1), // page actuelle
        6 // nombre d'éléments par page
    );

    return $this->render('admin/settingadmin/list.html.twig', [
        "userlist" => $userlist
    ]);
}



    //update user and display the form in the admin panel
    #[Route('/admin/settingadmin/edit/{id}', name: 'admin_setting_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher  // ✅ Ajoutez ce service
    ): Response {
        // 1. Récupérer l'utilisateur à modifier
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        // 2. Créer le formulaire pré-rempli avec les données de l'utilisateur
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        // 3. Si soumis et valide, enregistrer en BDD
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du mot de passe (optionnel pour edit)
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);  // ✅ Hashage automatique
                $user->setPassword($hashedPassword);
            }

            $em->flush();

            $this->addFlash('success', 'Profil mis à jour avec succès !');

            return $this->redirectToRoute('app_admin_settingadmin');
        }

        // 4. Afficher le formulaire
        return $this->render('admin/settingadmin/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/useradmin/delete/{id}', name: 'app_admin_user_delete', methods: ['DELETE'])]
    public function delete(User $user, EntityManagerInterface $em): JsonResponse
    {
        $filesystem = new Filesystem();

        // chemin du dossier des images
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/images/profiles/';

        // supprimer le fichier si existe
        if ($user->getProfilePictureName()) {

            $filePath = $uploadDir . $user->getProfilePictureName();

            if ($filesystem->exists($filePath)) {
                $filesystem->remove($filePath);
            }
        }

        // supprimer l'utilisateur
        $em->remove($user);
        $em->flush();

        return $this->json([
            'success' => true,
            'message' => 'User deleted successfully'
        ]);
    }

    //Voir les détails d'un utilisateur
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
}
