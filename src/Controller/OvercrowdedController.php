<?php

namespace App\Controller;

use App\Entity\Overcrowding;
use App\Repository\OvercrowdingRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class OvercrowdedController extends AbstractController

{
    #[Route('/proj/create', name: 'proj_create', methods: ['GET'])]
    public function create(
        ManagerRegistry $doctrine,
    ): Response {
        $entityManager = $doctrine->getManager();

        $overCrowded = new Overcrowding();

        // $overCrowded->setCountry("EU-27");
        // $overCrowded->setCategory("Inrikes födda");
        // $overCrowded->setAmount(14);

        //$overCrowded->setCategory("Utrikes födda");

        $entityManager->persist($overCrowded);

        $entityManager->flush();

        return new Response(
            'Saved new info with id '.$overCrowded->getId().
            '. Saved new info with country '.$overCrowded->getCountry().
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
        OverCrowdingRepository $overcrowdedRepository,
        ChartBuilderInterface $chartBuilder
    ): Response {

        $allOverCrowded = $overcrowdedRepository->findAll();

        $chart1 = $chartBuilder->createChart(Chart::TYPE_BAR);

        $labels1 = [];
        $data1 = [];

        foreach ($allOverCrowded as $overcrowded) {
            $labels1[] = $overcrowded->getCountry().' ('.$overcrowded->getCategory().')';
            $data1[] = $overcrowded->getAmount();

            if ($overcrowded->getCategory() === 'Inrikes födda') {
                $backgroundColor[] = 'rgba(255, 99, 132, 0.5)';
                $borderColor[] = 'rgb(255, 99, 132)';
            } else {
                $backgroundColor[] = 'rgba(54, 162, 235, 0.5)';
                $borderColor[] = 'rgb(54, 162, 235)';
            }
        }

        $chart1->setData([
            'labels' => $labels1,
            'datasets' => [
                [
                    'label' => 'Andel trångbodda efter födelseland, 18 år och äldre, EU-27 och Norden',
                    'backgroundColor' => $backgroundColor,
                    'borderColor' => $borderColor,
                    'data' => $data1
                ],
            ],
        ]);

        $chart1->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'suggestedMax' => 40,
                ],
            ],
        ]);

        $result = [
            'chart1' => $chart1,
            'overcrowded' => $allOverCrowded,
        ];

        return $this->render('proj/index.html.twig', $result);
    }
}

