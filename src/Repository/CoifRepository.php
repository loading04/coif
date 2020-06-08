<?php

namespace App\Repository;

use App\Entity\Coif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coif[]    findAll()
 * @method Coif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coif::class);
    }

     /**
    * @return Coif[] Returns an array of Coif objects
    */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.spec = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Coif
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
