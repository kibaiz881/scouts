<?php

namespace App\Controller\admin;

use App\Entity\Mpiandrakitra;
use App\Form\MpiandrakitraFormType;
use App\Repository\MpiandrakitraRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;

final class MpiandrakitraController extends AbstractController
{
    #[Route('/admin/mpiandrakitra', name: 'app_admin_mpiandrakitra')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        MpiandrakitraRepository $mpiandritraRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {

        $query = $mpiandritraRepository->createQueryBuilder('m')
            ->orderBy('m.id', 'DESC')
            ->getQuery();

        $mpiandrakitra = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('admin/mpiandrakitra/index.html.twig', [
            'mpiandrakitra' => $mpiandrakitra,
        ]);
    }

    #[Route('/admin/mpiandrakitra/new', name: 'app_admin_mpiandrakitra_new')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        MpiandrakitraRepository $mpiandrakitraRepository
    ): Response {
        $mpiandrakitra = new Mpiandrakitra();

        $form = $this->createForm(MpiandrakitraFormType::class, $mpiandrakitra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Génération automatique du code Mp
            $lastMpiandrakitra = $mpiandrakitraRepository->findOneBy([], ['id' => 'DESC']);
            $lastId = 0;

            if ($lastMpiandrakitra && $lastMpiandrakitra->getCodeMp()) {
                $lastCodeMp = $lastMpiandrakitra->getCodeMp(); // ex: MP0010
                $lastId = (int) substr($lastCodeMp, 2);        // -> 10
            }

            $mpiandrakitra->setCodeMp('MP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT));

            // Date : le form renvoie déjà un DateTimeInterface
            $myDate = $form->get('dateNaissMp')->getData(); // DateTimeInterface
            $mpiandrakitra->setDateNaissMp($myDate);

            // Image
            $mpiandrakitraPictureFile = $form->get('mpiandrakitraPictureFile')->getData();

            if ($mpiandrakitraPictureFile) {
                $mpiandrakitra->setMpiandrakitraPictureName(
                    $mpiandrakitraPictureFile->getClientOriginalName()
                );
            }

            $entityManager->persist($mpiandrakitra);
            $entityManager->flush();

            $this->addFlash('success', 'Mp created successfully');

            return $this->redirectToRoute('app_admin_mpiandrakitra');
        }

        return $this->render('admin/mpiandrakitra/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    //view id mpiandrakitra
    #[Route('/admin/mpiandrakitra/view/{id}', name: 'app_admin_mpiandrakitra_view')]
    #[IsGranted('ROLE_ADMIN')]
    public function view(
        Mpiandrakitra $mpiandrakitra
    ): Response {
        $form = $this->createForm(MpiandrakitraFormType::class);
        return $this->render('admin/mpiandrakitra/view.html.twig', [
            'mpiandrakitra' => $mpiandrakitra,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/mpiandrakitra/edit/{id}', name: 'app_admin_mpiandrakitra_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(
        Request $request,
        Mpiandrakitra $mpiandrakitra,
        EntityManagerInterface $entityManager
    ): Response {

        $form = $this->createForm(MpiandrakitraFormType::class, $mpiandrakitra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->addFlash('success', 'Mp update successfully');

            return $this->redirectToRoute('app_admin_mpiandrakitra');
        }

        return $this->render('admin/mpiandrakitra/edit.html.twig', [
            'form' => $form->createView(),
            'mpiandrakitra' => $mpiandrakitra
        ]);
    }



    //delete mp 
    #[Route('/admin/mpiandrakitra/delete/{id}', name: 'app_admin_mpiandrakitra_delete')]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(
        Mpiandrakitra $mpiandrakitra,
        EntityManagerInterface $entityManager
    ): Response {
        $entityManager->remove($mpiandrakitra);
        $entityManager->flush();
        $this->addFlash('success', 'Mp deleted successfylly');

        return $this->redirectToRoute('app_admin_mpiandrakitra');
    }
}
