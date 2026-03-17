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

final class SampanaController extends AbstractController
{
    #[Route('/admin/sampana', name: 'app_admin_sampana')]
    #[IsGranted("ROLE_ADMIN")]
    public function index(
        SampanaRepository $sampanaRepository
    ): Response {
        // find all sampana
        $sampanas = $sampanaRepository->findAll();
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
}
