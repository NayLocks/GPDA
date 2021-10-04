<?php

namespace App\Repository;

use App\Entity\PDA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PDA|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDA|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDA::class);
    }

    public function findAll()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.pCompany', 'ASC')
            ->addOrderBy('p.pNoPda', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function totalCompany()
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id) AS nb, companies.cName')
            ->join('p.pCompany', 'companies')
            ->orderBy('companies.cName', 'ASC')
            ->where('companies.cName <> :test')
            ->setParameter('test', "AUCUNE")
            ->groupBy('p.pCompany')
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return PDA[] Returns an array of PDA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PDA
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
