<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class MPController extends AbstractController
{
    #[Route('/admin/m/p', name: 'app_admin_m_p')]
    #[IsGranted("ROLE_ADMIN")]
    public function index(
        
    ): Response
    {
        $mpTitle = "Mpiandraikitra page";
        //Find all mpiandrakitra page
        

        return $this->render('admin/mp/index.html.twig', [
            "mpPage" => $mpTitle
        ]);
    }
}
