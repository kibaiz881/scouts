<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TondroController extends AbstractController
{
    #[Route('/users/tondro', name: 'app_user_tondro')]
    public function index(): Response
    {
        return $this->render('user/tondro/index.html.twig', [
            'controller_name' => 'TondroController',
        ]);
    }
}
