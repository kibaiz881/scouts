<?php

namespace App\Controller\users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BeazinaController extends AbstractController
{
    #[Route('/users/beazina', name: 'app_user_beazina')]
    public function index(): Response
    {
        return $this->render('user/beazina/index.html.twig', [
            'controller_name' => 'BeazinaController',
        ]);
    }
}
