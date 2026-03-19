<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\AddnewuserFormAdminType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;
final class UseradminController extends AbstractController
{
    //find all users and display them in the admin panel
    #[Route('/admin/useradmin', name: 'app_admin_useradmin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        UserRepository $userRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response
    {
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
#[isGranted('ROLE_ADMIN')]
public function new(
    Request $request,
    EntityManagerInterface $entityManager,
    UserPasswordHasherInterface $userPasswordHasher 
): Response
{
    //$this->denyAccessUnlessGranted('ROLE_ADMIN');

    $user = new User();

    // Lier le formulaire avec l'entité
    $form = $this->createForm(AddnewuserFormAdminType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // Mot de passe
        $plainPassword = $form->get('password')->getData();

        if ($plainPassword) {
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $plainPassword)
            );
        }

        // rôle par défaut
        $user->setRoles(['ROLE_USER']);

        $user->setCreatedAt(new \DateTimeImmutable());

        // Gestion image profil
        $profilePictureFile = $form->get('profilePictureFile')->getData();

        if ($profilePictureFile) {
            $user->setProfilePictureFile($profilePictureFile);
            $user->setProfilePictureName($profilePictureFile->getClientOriginalName());
        }

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
