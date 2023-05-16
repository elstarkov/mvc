<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Controller for handling metrics
 */
class MetricsController extends AbstractController
{
    #[Route("/metrics", name: "metrics")]
    /**
     * Renders base URL for metrics
     */
    public function metrics(): Response
    {
        return $this->render('metrics/metrics.html.twig');
    }
}