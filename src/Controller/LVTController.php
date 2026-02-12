<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LVTController extends AbstractController
{
    #[Route('/l/v/t', name: 'app_l_v_t')]
    public function index(): Response
    {
        $lvtTitle = "Lovitao page";
        return $this->render('lvt/index.html.twig', [
            "lvtpage" => $lvtTitle
        ]);
    }
}
