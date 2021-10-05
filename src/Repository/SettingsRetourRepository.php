<?php

namespace App\Repository;

use App\Entity\SettingsRetour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SettingsRetour|null find($id, $lockMode = null, $lockVersion = null)
 * @method SettingsRetour|null findOneBy(array $criteria, array $orderBy = null)
 * @method SettingsRetour[]    findAll()
 * @method SettingsRetour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SettingsRetourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SettingsRetour::class);
    }

    // /**
    //  * @return SettingsRetour[] Returns an array of SettingsRetour objects
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
    public function findOneBySomeField($value): ?SettingsRetour
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
