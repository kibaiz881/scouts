<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VatompanorenanaController extends AbstractController
{
    #[Route('/users/vatompanorenana', name: 'app_user_vatompanorenana')]
    public function index(): Response
    {
        return $this->render('user/vatompanorenana/index.html.twig', [
            'controller_name' => 'VatompanorenanaController',
        ]);
    }
}
