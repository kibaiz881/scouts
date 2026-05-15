<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SokajyController extends AbstractController
{
    #[Route('/users/sokajy', name: 'app_user_sokajy')]
    public function index(): Response
    {
        return $this->render('user/sokajy/index.html.twig', [
            'controller_name' => 'SokajyController',
        ]);
    }
}
