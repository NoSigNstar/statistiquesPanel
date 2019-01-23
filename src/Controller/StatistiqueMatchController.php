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
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY ='SELECT * FROM `get5_stats_players` WHERE matchid = '.$id.'';

        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();

        $statistiques = $statement->fetchAll();

        return $this->render('statistique_match/index.html.twig', [
            'controller_name' => 'StatistiqueMatchController',
            'statistiques' => $statistiques,
        ]);
    }
}
