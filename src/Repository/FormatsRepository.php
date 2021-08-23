<?php

namespace App\Repository;

use App\Entity\Formats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Formats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formats[]    findAll()
 * @method Formats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formats::class);
    }

    // /**
    //  * @return Formats[] Returns an array of Formats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Formats
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
