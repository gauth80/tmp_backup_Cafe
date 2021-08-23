<?php

namespace App\Repository;

use App\Entity\LivrerProd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LivrerProd|null find($id, $lockMode = null, $lockVersion = null)
 * @method LivrerProd|null findOneBy(array $criteria, array $orderBy = null)
 * @method LivrerProd[]    findAll()
 * @method LivrerProd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivrerProdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LivrerProd::class);
    }

    // /**
    //  * @return LivrerProd[] Returns an array of LivrerProd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LivrerProd
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
