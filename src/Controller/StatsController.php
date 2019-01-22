<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Get5StatsMatches;
use App\Repository\Get5StatsMatchesRepository;

class StatsController extends AbstractController
{
    /**
     * @Route("/", name="stats")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Get5StatsMatches::class);
        $matches = $repository->findAll();

        return $this->render('stats/index.html.twig', [
            'controller_name' => 'StatsController',
            'matches' => $matches,
        ]);
    }
}
