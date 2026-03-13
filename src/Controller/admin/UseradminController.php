<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UseradminController extends AbstractController
{
    //find all users and display them in the admin panel
    #[Route('/admin/useradmin', name: 'app_admin_useradmin')]
    public function index(
        UserRepository $userRepository
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $userlist = $userRepository->findAll();
        return $this->render('admin/useradmin/index.html.twig', [
            "userlist" => $userlist
        ]);
    }

    // #[Route('/admin/useradmin/{id}/toggle', name: 'app_admin_useradmin_toggle')]
    // public function toggleUserStatus(
    //     UserRepository $userRepository,
    //     int $id
    // ): Response
    // {        
    //     $this->denyAccessUnlessGranted('ROLE_ADMIN');
    //     $user = $userRepository->find($id);
    //     if (!$user) {
    //         throw $this->createNotFoundException('User not found');
    //     }
    //     $user->setIsEnable(!$user->isEnable());
    //     $userRepository->save($user, true);
    //     return $this->redirectToRoute('app_admin_useradmin');
    // }

    //create new user and display the form in the admin panel
    #[Route('/admin/useradmin/new', name: 'app_admin_useradmin_newuser')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher,
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            // Récupérer le mot de passe en clair
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // Encoder le mot de passe
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            $user->setEmail($form->get('email')->getData());
            $user->setUsername($form->get('username')->getData());
            $user->setRoles(['ROLE_USER']);
            $user->setCreatedAt(new \DateTimeImmutable());
            $profilePictureFile = $form->get('profilePictureFile')->getData();
            $user->setProfilePictureFile($profilePictureFile);
            $user->setProfilePictureName($profilePictureFile ? $profilePictureFile->getClientOriginalName() : null);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'User created successfully!');
            return $this->redirectToRoute('app_admin_useradmin');
        }
        return $this->render('admin/useradmin/new.html.twig', [
            'userform' => $form->createView(),
        ]);
    }
    
}
