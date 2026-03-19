<?php

namespace App\Controller\admin;
use App\Repository\FivondronanaRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

final class FivondronannaController extends AbstractController
{
    #[Route('/admin/fivondronanna', name: 'app_admin_fivondronanna')]
    #[IsGranted("ROLE_ADMIN")]
    public function index(
        Request $request,
        FivondronanaRepository $fivondronanaRepository,
        PaginatorInterface $paginator
    ): Response
    {
        $query = $fivondronanaRepository->createQueryBuilder('f')
            ->orderBy('f.id', 'DESC')
            ->getQuery();
        $fivondronannas = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );
        return $this->render('/admin/fivondronanna/index.html.twig', [
            'fivondronannas' => $fivondronannas,
        ]);
    }
}
