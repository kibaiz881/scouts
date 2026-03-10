<?php

namespace App\Controller\admin;

use App\Form\PostFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PostAdminController extends AbstractController
{
    //find all post
    #[Route('/admin/post/admin', name: 'app_admin_post_admin')]
    public function index(): Response
    {
        return $this->render('admin/post_admin/index.html.twig', []);
    }

    //new post admin create post
    #[Route('/admin/post/newpostadmin', name: 'app_admin_post_newpostadmin')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response {
        $form = $this->createForm(PostFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->redirectToRoute('app_admin_post_admin');
        }
        return $this->render('admin/post_admin/newpostadmin.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
