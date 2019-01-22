<?php

namespace App\Repository;

use App\Entity\Get5StatsMatches;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Get5StatsMatches|null find($id, $lockMode = null, $lockVersion = null)
 * @method Get5StatsMatches|null findOneBy(array $criteria, array $orderBy = null)
 * @method Get5StatsMatches[]    findAll()
 * @method Get5StatsMatches[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Get5StatsMatchesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Get5StatsMatches::class);
    }

    // /**
    //  * @return Get5StatsMatches[] Returns an array of Get5StatsMatches objects
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
    public function findOneBySomeField($value): ?Get5StatsMatches
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
