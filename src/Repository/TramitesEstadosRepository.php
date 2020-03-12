<?php

namespace App\Repository;

use App\Entity\TramitesEstados;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TramitesEstados|null find($id, $lockMode = null, $lockVersion = null)
 * @method TramitesEstados|null findOneBy(array $criteria, array $orderBy = null)
 * @method TramitesEstados[]    findAll()
 * @method TramitesEstados[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TramitesEstadosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TramitesEstados::class);
    }

    // /**
    //  * @return TramitesEstados[] Returns an array of TramitesEstados objects
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
    public function findOneBySomeField($value): ?TramitesEstados
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
