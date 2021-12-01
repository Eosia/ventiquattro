<?php

namespace App\Repository;

use App\Entity\Sorte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sorte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sorte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sorte[]    findAll()
 * @method Sorte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SorteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sorte::class);
    }

    // /**
    //  * @return Sorte[] Returns an array of Sorte objects
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
    public function findOneBySomeField($value): ?Sorte
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
