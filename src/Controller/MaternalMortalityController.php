<?php

namespace App\Controller;

use App\Entity\MaternalMortality;
use App\Repository\MaternalMortalityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaternalMortalityController extends AbstractController
{
    #[Route('/proj/create/mortality', name: 'proj_create_mortality', methods: ['GET'])]
    public function create(
        //ManagerRegistry $doctrine,
    ): Response {
        //$entityManager = $doctrine->getManager();

        $mortality = new MaternalMortality();

        // $mortality->setYear(2020);
        // $mortality->setRate(7.1);

        // $entityManager->persist($mortality);

        // $entityManager->flush();

        return new Response(
            'Saved new info with id '.$mortality->getId().
            '. Saved new info with Year '.$mortality->getYear().
            '. Saved new info with Rate '.$mortality->getRate()
        );
    }

    #[Route('/proj/delete/mortality/{id}', name: 'proj_delete_mortality', methods: ['GET'])]
    public function delete(
        MaternalMortalityRepository $maternalMortalityRepository,
        int $id
    ): Response {

        $info = $maternalMortalityRepository->find($id);

        if (!$info) {
            throw $this->createNotFoundException(
                'No info$info found for id '.$id
            );
        }

        $maternalMortalityRepository->remove($info, true);

        return new Response(
            'Deleted info$info with id'.$info->getId()
        );
    }
}
