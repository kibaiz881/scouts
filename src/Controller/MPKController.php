<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MPKController extends AbstractController
{
    #[Route('/m/p/k', name: 'app_m_p_k')]
    public function index(): Response
    {
        $mpkTitle = "Mpamakilay page";
        return $this->render('mpk/index.html.twig', [
            "mpkPage" => $mpkTitle
        ]);
    }
}
