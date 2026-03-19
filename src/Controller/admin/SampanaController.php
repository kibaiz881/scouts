<?php

namespace App\Controller\admin;

use App\Entity\Sampana;
use App\Repository\SampanaRepository;
use App\Form\SampanaFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
final class SampanaController extends AbstractController
{

//find and pagination page
#[Route('/admin/sampana', name: 'app_admin_sampana')]
#[IsGranted("ROLE_ADMIN")]
public function index(
    SampanaRepository $sampanaRepository,
    PaginatorInterface $paginator,
    Request $request,
): Response {

    $query = $sampanaRepository->createQueryBuilder('s')
        ->orderBy('s.id', 'DESC')
        ->getQuery();

    $sampanas = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        6
    );

    return $this->render('admin/sampana/index.html.twig', [
        'sampanas' => $sampanas,
    ]);
}


    //add new sampana
    #[Route('/admin/sampana/new', name: 'app_admin_sampana_new')]
    #[IsGranted("ROLE_ADMIN")]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SampanaRepository $sampanaRepository
    ): Response
    {
        $sampana = new Sampana();

        $form = $this->createForm(SampanaFormType::class, $sampana);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //create codeSampana
            $lastSampana = $sampanaRepository->findOneBy([], ['id' => 'DESC']);
            $lastId = $lastSampana ? (int) $lastSampana->getId() : 0;
            if($lastSampana && $lastSampana->getCodeSampana()) {
                $lastCode = $lastSampana->getCodeSampana();
                $lastId = (int) substr($lastCode, 4); // extract the numeric part
            }

            $sampana->setCodeSampana('SAMP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT));

            //save sampana
            $entityManager->persist($sampana);
            $entityManager->flush();
            
            $this->addFlash('success', 'Sampana created successfully!');
            return $this->redirectToRoute('app_admin_sampana');}
        return $this->render('admin/sampana/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //view sampana
    #[Route('/admin/sampana/{id}', name: 'app_admin_sampana_view')]
    #[IsGranted("ROLE_ADMIN")]
    public function view(
        Sampana $sampana
    ): Response
    {
        $form = $this->createForm(SampanaFormType::class);
        return $this->render('admin/sampana/view.html.twig', [
            'sampana' => $sampana,
            'form' => $form->createView(),
        ]); 
    }

    //edit sampana
    #[Route('/admin/sampana/edit/{id}', name: 'app_admin_sampana_edit')]
    #[IsGranted("ROLE_ADMIN")]
    public function edit(
        Request $request,
        Sampana $sampana,
        EntityManagerInterface $entityManager
    ): Response
    {        
        $form = $this->createForm(SampanaFormType::class, $sampana);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Sampana updated successfully!');
            return $this->redirectToRoute('app_admin_sampana');
        }
        return $this->render('admin/sampana/edit.html.twig', [
            'form' => $form->createView(),
            'sampana' => $sampana,
        ]);
    }

    //delete sampana
    #[Route('/admin/sampana/delete/{id}', name: 'app_admin_sampana_delete')]
    #[IsGranted("ROLE_ADMIN")]
    public function delete(
        Sampana $sampana,
        EntityManagerInterface $entityManager
    ): Response
    {        $entityManager->remove($sampana);
        $entityManager->flush();
        $this->addFlash('success', 'Sampana deleted successfully!');
        return $this->redirectToRoute('app_admin_sampana'); 
    }

}
