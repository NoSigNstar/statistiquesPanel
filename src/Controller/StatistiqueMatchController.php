<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Get5StatsPlayers;
use App\Repository\Get5StatsPlayersRepository;

class StatistiqueMatchController extends AbstractController
{
    /**
     * @Route("/statistique/match/{id}", name="statistique_match")
     */
    public function index(Get5StatsPlayersRepository $repository, $id)
    {
        $statistiques = $repository->findBy(
            ['matchid' => $id],
            ['kills' => 'ASC']
        );

        return $this->render('statistique_match/index.html.twig', [
            'controller_name' => 'StatistiqueMatchController',
            'statistiques' => $statistiques,
        ]);
    }
}
