<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ActualiteController extends AbstractController
{
    #[Route('/actualite/{page}/{itemsPerPage}', name: 'app_actualite', requirements: ['page' => '\d+', 'itemsPerPage' => '\d+'])]
    public function index(PostRepository $postRepository, int $page = 1, int $itemsPerPage = 10): Response
    {
        $titleActu = "Actualité du jours";
        $posts = $postRepository->createQueryBuilder('p')
            ->where('p.isPublished = :published')
            ->setParameter('published', true)
            ->setFirstResult(($page - 1) * $itemsPerPage)
            ->setMaxResults($itemsPerPage)
            ->getQuery()
            ->getResult();
        return $this->render('actualite/index.html.twig', [
            "actu" => $titleActu,
            'posts' => $posts,
            'currentPage' => $page,
            'itemsPerPage' => $itemsPerPage,
            'noOfPages' => ($postRepository->count(['isPublished' => true]) / $itemsPerPage),
            'totalItemsPost' => ($postRepository->count(['isPublished' => true])),

        ]);
    }

    #[Route('/actualite/show/{post}', name: 'app_actualite_show')]
    public function show(Post $post, PostRepository $postRepository, CategoryRepository $categoryRepository): Response
    {
        $titleActu = "Actualité du jours";
        if (!$post->isPublished()) {
            throw $this->createNotFoundException('Post not found');
        }

        $categories = $categoryRepository->findAll();

        return $this->render('actualite/show.html.twig', [
            'actu' => $titleActu,
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $postRepository->findBy(['isPublished' => true], ['postedAt' => 'DESC'], 5),
        ]);
    }

    #[Route('/actualite/show/{category}', name: 'app_actualite_show')]
    public function category(Category $category, PostRepository $postRepository): Response
    {
        $posts = $postRepository->createQueryBuilder('p')
            ->innerJoin('p.categories', 'c')
            ->andWhere('c = :category')
            ->andWhere('p.isPublished = :published')
            ->setParameter('category', $category)
            ->setParameter('published', true)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('actualite/show.html.twig', [
            'actu' => 'Actualité du jour',
            'category' => $category,
            'posts' => $posts,
        ]);
    }
}
