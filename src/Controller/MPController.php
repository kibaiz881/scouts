<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MPController extends AbstractController
{
    #[Route('/m/p', name: 'app_m_p')]
    public function index(): Response
    {
        $mpTitle = "Mpiandraikitra page";

        return $this->render('mp/index.html.twig', [
            "mpPage" => $mpTitle
        ]);
    }
}
