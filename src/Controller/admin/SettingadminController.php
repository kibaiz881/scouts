<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

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
    public function list(): Response
    {
        return $this->render('admin/settingadmin/list.html.twig', [
            'currentUser' => $this->getUser(),
        ]);
    }

    #[Route('/admin/settingadmin/edit/{id}', name: 'admin_setting_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id): Response
    {
        
        return $this->render('admin/settingadmin/edit.html.twig', [
            'currentUser' => $this->getUser(),
            'id' => $id,
        ]);
    }
}
