<?php

namespace App\Controller\admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
