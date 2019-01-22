<?php

namespace App\Repository;

use App\Entity\Get5StatsMaps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Get5StatsMaps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Get5StatsMaps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Get5StatsMaps[]    findAll()
 * @method Get5StatsMaps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Get5StatsMapsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Get5StatsMaps::class);
    }

    // /**
    //  * @return Get5StatsMaps[] Returns an array of Get5StatsMaps objects
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
    public function findOneBySomeField($value): ?Get5StatsMaps
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
