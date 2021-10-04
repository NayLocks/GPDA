<?php

namespace App\Repository;

use App\Entity\SIM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SIM|null find($id, $lockMode = null, $lockVersion = null)
 * @method SIM|null findOneBy(array $criteria, array $orderBy = null)
 * @method SIM[]    findAll()
 * @method SIM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SIMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SIM::class);
    }

    // /**
    //  * @return SIM[] Returns an array of SIM objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SIM
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
