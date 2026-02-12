<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MPJController extends AbstractController
{
    #[Route('/m/p/j', name: 'app_m_p_j')]
    public function index(): Response
    {
        $mpjTitle = "Mpianjoria Page";
        return $this->render('mpj/index.html.twig', [
            "mpjPage" => $mpjTitle
        ]);
    }
}
