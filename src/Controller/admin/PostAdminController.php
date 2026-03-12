<?php

namespace App\Controller\admin;

use App\Entity\Post;
use App\Form\PostFormType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PostAdminController extends AbstractController
{
    // afficher seulement les posts de l'utilisateur connecté
    #[Route('/admin/post/admin', name: 'app_admin_post_admin')]
    public function index(PostRepository $postRepository): Response
    {
        $user = $this->getUser();

        $posts = $postRepository->findBy([
            'user' => $user
        ]);

        return $this->render('admin/post_admin/index.html.twig', [
            'posts' => $posts
        ]);
    }

    // créer un nouveau post
    #[Route('/admin/post/newpostadmin', name: 'app_admin_post_newpostadmin')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response {

        $post = new Post();

        // lier le post à l'utilisateur connecté
        $post->setUser($this->getUser());

        $form = $this->createForm(PostFormType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $post->setPostedAt(new \DateTimeImmutable());

            $postPictureFile = $form->get('PostPictureFile')->getData();

            if ($postPictureFile) {
                $post->setPostPictureName($postPictureFile->getClientOriginalName());
            }

            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'Publication créée avec succès !');

            return $this->redirectToRoute('app_admin_post_admin');
        }

        return $this->render('admin/post_admin/newpostadmin.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/post/approve/{id}', name: 'app_post_approve', methods: ['POST'])]
    public function approve(Post $post, EntityManagerInterface $em): JsonResponse
    {
        $post->setIsPublished(true);

        $em->flush();

        return new JsonResponse([
            'success' => true
        ]);
    }

    #[Route('/admin/post/reject/{id}', name: 'app_post_reject', methods: ['POST'])]
    public function reject(Post $post, EntityManagerInterface $em): JsonResponse
    {
        $post->setIsPublished(false);

        $em->flush();

        return new JsonResponse([
            'success' => true
        ]);
    }
}
