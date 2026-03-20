<?php

namespace App\Controller\admin;
use App\Repository\FivondronanaRepository;
use App\Form\FivondronanaFormType;
use App\Entity\Fivondronana;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

final class FivondronannaController extends AbstractController
{
    //pagination page and find all fivondronannas
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

    //add new fivondronanna
    #[Route('/admin/fivondronanna/new', name: 'app_admin_fivondronanna_new')]
    #[IsGranted("ROLE_ADMIN")]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        FivondronanaRepository $fivondronanaRepository
    ): Response    {
        $fivondronanna = new Fivondronana();
        $form = $this->createForm(FivondronanaFormType::class, $fivondronanna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lastFivondronanna = $fivondronanaRepository->findOneBy([], ['id' => 'DESC']);
            $lastId = $lastFivondronanna ? (int) $lastFivondronanna->getId() : 0;
            if($lastFivondronanna && $lastFivondronanna->getCodeFiv()) {
                $lastCode = $lastFivondronanna->getCodeFiv();
                $lastId = (int) substr($lastCode, 3); // Supposons que le code commence par "FIV"
            
            }        
            $fivondronanna->setCodeFiv('FIV' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT));
            //save Fivondronana
            $entityManager->persist($fivondronanna);
            $entityManager->flush();
            $this->addFlash('success', 'Fivondronana créée avec succès !');
            return $this->redirectToRoute('app_admin_fivondronanna');
        }

        return $this->render('/admin/fivondronanna/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //edit fivondronanna
    #[Route('/admin/fivondronanna/edit/{id}', name: 'app_admin_fivondronanna_edit')]
    #[IsGranted("ROLE_ADMIN")]
    public function edit(
        Request $request,
        Fivondronana $fivondronanna,
        EntityManagerInterface $entityManager
    ): Response    {
        $form = $this->createForm(FivondronanaFormType::class, $fivondronanna);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Fivondronana modifiée avec succès !');
            return $this->redirectToRoute('app_admin_fivondronanna');
        }
        return $this->render('/admin/fivondronanna/edit.html.twig', [
            'form' => $form->createView(),
            'fivondronanna' => $fivondronanna,
        ]);
    }

    //view fivondronanna
    #[Route('/admin/fivondronanna/{id}', name: 'app_admin_fivondronanna_view')]
    #[IsGranted("ROLE_ADMIN")]
    public function view(
        Fivondronana $fivondronanna
    ): Response    {
        $form = $this->createForm(FivondronanaFormType::class);
        return $this->render('/admin/fivondronanna/view.html.twig', [
            'fivondronannas' => $fivondronanna,
            'form' => $form->createView(),
        ]);
    }

    //delete fivondronanna
    #[Route('/admin/fivondronanna/delete/{id}', name: 'app_admin_fivondronanna_delete')]
    #[IsGranted("ROLE_ADMIN")]
    public function delete(
        Fivondronana $fivondronanna,
        EntityManagerInterface $entityManager
    ): Response    {
        $entityManager->remove($fivondronanna);
        $entityManager->flush();
        $this->addFlash('success', 'Fivondronana supprimée avec succès !');
        return $this->redirectToRoute('app_admin_fivondronanna');   
    }

}
