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

final class MPController extends AbstractController
{
    #[Route('/admin/m/p', name: 'app_admin_m_p')]
    #[IsGranted("ROLE_ADMIN")]
    public function index(
        MpiandrakitraRepository $mpiandritraRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response
    {
        $mpTitle = "Mpiandraikitra page";
        //Find all mpiandrakitra page
        
        $query = $mpiandritraRepository->createQueryBuilder('m')
        ->orderBy('m.id', 'DESC')
        ->getQuery();

        $mpiandrakitra = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            6
        );

        return $this->render('admin/mp/index.html.twig', [
            'mpiandrakitra' => $mpiandrakitra,
            "mpPage" => $mpTitle
        ]);
    }

    //add new mpiandraikitra
    #[Route('/admin/mpiandrakitra/new', name: 'app_admin_mpiandrakitra_new')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        MpiandrakitraRepository $mpiandrakitraRepository
    ): Response
    {
        $mpiandrakitra = new Mpiandrakitra();

        $form = $this->createForm(MpiandrakitraFormType::class, $mpiandrakitra);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //code CodeMP
            $lastMpiandrakitra = $mpiandrakitraRepository->findOneBy([], ['id' => 'DESC']);
            $lastId = $lastMpiandrakitra ? (int) $lastMpiandrakitra->getId() : 0;
            if($lastMpiandrakitra && $lastMpiandrakitra->getCodeMp()){
                $lastCodeMp = $lastMpiandrakitra->getCodeMp();
                $lastId = (int) substr($lastCodeMp, 4);
            }
            $mpiandrakitra->setCodeMp('MP'.str_pad($lastId + 1, 4, '0', STR_PAD_LEFT ));
        
            //save mp
            $entityManager->persist($mpiandrakitra);
            $entityManager->flush();

            //message
            $this->addFlash('success', 'Mpiandrakitra created successfully');
            return $this->render('app_admin_mpiandrakitra');
        }

        return $this->render('admin/mpiandrakitra/new.html.twig', [
            'form'=> $form->createView()
        ]);
    }
}
