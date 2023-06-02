<?php

namespace App\Controller;

use App\Repository\OvercrowdingRepository;
use App\Entity\Overcrowding;

use App\Repository\MaternalMortalityRepository;

use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProjController extends AbstractController
{
    #[Route('/proj/about', name: 'proj_about', methods: ['GET'])]
    public function index(
    ): Response {

        return $this->render('proj/about.html.twig');
    }

    #[Route('/proj/api', name: 'proj_api', methods: ['GET'])]
    public function proj_api(
    ): Response {

        return $this->render('proj/api.html.twig');
    }

    #[Route('/proj/api/overcrowd', name: 'api_overcrowd', methods: ['GET'])]
    public function api_overcrowd(
        OverCrowdingRepository $overcrowdedRepository,
    ): Response {

        $allOverCrowded = $overcrowdedRepository->findAll();

        $id = [];
        $country = [];
        $category = [];
        $amount = [];

        foreach ($allOverCrowded as $overcrowded) {
            $id[] = $overcrowded->getId();
            $country[] = $overcrowded->getCountry();
            $category[] = $overcrowded->getCategory();
            $amount[] = $overcrowded->getAmount();
        }

        $data = [
            'id' => $id,
            'country' => $country,
            'category' => $category,
            'amount' => $amount
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route('/proj/api/overcrowd/sweden', name: 'api_sweden', methods: ['GET'])]
    public function api_sweden(
        OverCrowdingRepository $overcrowdedRepository,
    ): Response {

        $allOverCrowded = $overcrowdedRepository->findAll();

        $id = [];
        $country = [];
        $category = [];
        $amount = [];

        foreach ($allOverCrowded as $overcrowded) {
            if ($overcrowded->getCategory() === "Inrikes födda") {
                $id[] = $overcrowded->getId();
                $country[] = $overcrowded->getCountry();
                $category[] = $overcrowded->getCategory();
                $amount[] = $overcrowded->getAmount();
            }
        }

        $data = [
            'id' => $id,
            'country' => $country,
            'category' => $category,
            'amount' => $amount
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route('/proj/api/overcrowd/foreign', name: 'api_foreign', methods: ['GET'])]
    public function api_foreign(
        OverCrowdingRepository $overcrowdedRepository,
    ): Response {

        $allOverCrowded = $overcrowdedRepository->findAll();

        $id = [];
        $country = [];
        $category = [];
        $amount = [];

        foreach ($allOverCrowded as $overcrowded) {
            if ($overcrowded->getCategory() === "Utrikes födda") {
                $id[] = $overcrowded->getId();
                $country[] = $overcrowded->getCountry();
                $category[] = $overcrowded->getCategory();
                $amount[] = $overcrowded->getAmount();
            }
        }

        $data = [
            'id' => $id,
            'country' => $country,
            'category' => $category,
            'amount' => $amount
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route('/proj/api/mortality', name: 'api_mortality', methods: ['GET'])]
    public function api_mortality(
        MaternalMortalityRepository $mortalityRepo,
    ): Response {

        $allMortality = $mortalityRepo->findAll();

        $id = [];
        $year = [];
        $rate = [];

        foreach ($allMortality as $mortality) {
            $id[] = $mortality->getId();
            $year[] = $mortality->getYear();
            $rate[] = $mortality->getRate();
        }

        $data = [
            'id' => $id,
            'year' => $year,
            'rate' => $rate,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }

    #[Route('/proj/api/create', name: 'api_create', methods: ['GET'])]
    public function api_create(
    ): Response {

        return $this->render('proj/create.html.twig');
    }

    #[Route('/proj/api/create/overcrowded', name: 'api_create_overcrowded', methods: ['POST'])]
    public function api_create_overcrowded(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {

        $entityManager = $doctrine->getManager();

        $overcrowd = new Overcrowding();
        $overcrowd->setCountry($request->get('country'));
        $overcrowd->setCategory($request->get('category'));
        $overcrowd->setAmount($request->get('amount'));

        $entityManager->persist($overcrowd);

        $entityManager->flush();

        return $this->redirectToRoute('proj_api');
    }
}
