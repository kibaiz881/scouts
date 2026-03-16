<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SampanaController extends AbstractController
{
    #[Route('/admin/sampana', name: 'app_admin_sampana')]
    public function index(): Response
    {
        return $this->render('/admin/sampana/index.html.twig', [
            'controller_name' => 'SampanaController',
        ]);
    }
}
