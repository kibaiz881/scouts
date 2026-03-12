<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UseradminController extends AbstractController
{
    #[Route('/admin/useradmin', name: 'app_admin_useradmin')]
    public function index(): Response
    {
        return $this->render('admin/useradmin/index.html.twig', [
            'controller_name' => 'UseradminController',
        ]);
    }
}
