<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostAdminController extends AbstractController
{
    //find all post
    #[Route('/admin/post/admin', name: 'app_admin_post_admin')]
    public function index(): Response
    {
        return $this->render('admin/post_admin/index.html.twig', [
            'controller_name' => 'PostAdminController',
        ]);
    }
    
    //new post admin create post
    #[Route('/admin/post/newpostadmin', name: 'app_admin_post_newpostadmin')]
    public function new(): Response
    {        return $this->render('admin/post_admin/newpostadmin.html.twig', [
            'controller_name' => 'PostAdminController',
        ]); 
    }
}
