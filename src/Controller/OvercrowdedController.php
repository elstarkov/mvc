<?php

namespace App\Controller;

use App\Entity\Overcrowding;
use App\Repository\OvercrowdingRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OvercrowdedController extends AbstractController

{
    #[Route('/proj/create', name: 'proj_create', methods: ['GET'])]
    public function create(
        ManagerRegistry $doctrine,
    ): Response {
        $entityManager = $doctrine->getManager();

        $overCrowded = new Overcrowding();

        $overCrowded->setYear("2020-2020");
        $overCrowded->setGender("Män");
        $overCrowded->setCategory("Utrikes födda");
        $overCrowded->setAmount(16.5);

        $entityManager->persist($overCrowded);

        $entityManager->flush();

        return new Response(
            'Saved new info with id '.$overCrowded->getId().
            '. Saved new info with gender '.$overCrowded->getGender().
            '. Saved new info with category '.$overCrowded->getCategory().
            '. Saved new info with amount '.$overCrowded->getAmount(),
        );
    }

    #[Route('/proj/delete/{id}', name: 'proj_delete', methods: ['GET'])]
    public function delete(
        OverCrowdingRepository $overcrowdedRepository,
        int $id
    ): Response {

        $info = $overcrowdedRepository->find($id);

        if (!$info) {
            throw $this->createNotFoundException(
                'No info$info found for id '.$id
            );
        }

        $overcrowdedRepository->remove($info, true);

        return new Response(
            'Deleted info$info with id'.$info->getId()
        );
    }


    #[Route('/proj', name: 'proj', methods: ['GET'])]
    public function index(
        OverCrowdingRepository $overcrowdedRepository
    ): Response {
        $allOverCrowded = $overcrowdedRepository->findAll();

        $data = [
            'overcrowded' => $allOverCrowded,
        ];

        return $this->render('proj/index.html.twig', $data);
    }
}

