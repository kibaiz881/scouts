<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/{page}/{itemsPerPage}', name: 'app_blog', requirements: ['page' => '\d+', 'itemsPerPage' => '\d+'])]
    public function index(PostRepository $postRepository, int $page = 1, int $itemsPerPage = 10): Response
    {

        $posts = $postRepository->createQueryBuilder('p')
            ->where('p.isPublished = :published')
            ->setParameter('published', true)
            ->setFirstResult(($page - 1) * $itemsPerPage)
            ->setMaxResults($itemsPerPage)
            ->getQuery()
            ->getResult();

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
            'currentPage' => $page,
            'itemsPerPage' => $itemsPerPage,
            'noOfPages' => ($postRepository->count(['isPublished'=>true])/$itemsPerPage),
            'totalItemsPost' => ($postRepository->count(['isPublished'=>true]))
        ]);
    }
}
