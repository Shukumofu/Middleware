<?php

namespace App\Repository;

use App\Entity\VegaMissile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VegaMissile|null find($id, $lockMode = null, $lockVersion = null)
 * @method VegaMissile|null findOneBy(array $criteria, array $orderBy = null)
 * @method VegaMissile[]    findAll()
 * @method VegaMissile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VegaMissileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VegaMissile::class);
    }

    // /**
    //  * @return VegaMissile[] Returns an array of VegaMissile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VegaMissile
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
