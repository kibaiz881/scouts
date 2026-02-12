<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MPDLController extends AbstractController
{
    #[Route('/m/p/d/l', name: 'app_m_p_d_l')]
    public function index(): Response
    {
        $mpdlTitle = "Mpiandalana page";
        return $this->render('mpdl/index.html.twig', [
            "mpdlPage" => $mpdlTitle
        ]);
    }
}
