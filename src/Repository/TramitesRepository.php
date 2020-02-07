<?php

namespace App\Repository;

use App\Entity\Tramites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tramites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tramites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tramites[]    findAll()
 * @method Tramites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TramitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tramites::class);
    }

    // /**
    //  * @return Tramites[] Returns an array of Tramites objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tramites
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
