<?php

namespace App\Repository;

use App\Entity\Get5StatsPlayers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Get5StatsPlayers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Get5StatsPlayers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Get5StatsPlayers[]    findAll()
 * @method Get5StatsPlayers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Get5StatsPlayersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Get5StatsPlayers::class);
    }

    // /**
    //  * @return Get5StatsPlayers[] Returns an array of Get5StatsPlayers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Get5StatsPlayers
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
