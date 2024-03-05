<?php

namespace App\Repository;

use App\Entity\MoyenTransport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MoyenTransport>
 *
 * @method MoyenTransport|null find($id, $lockMode = null, $lockVersion = null)
 * @method MoyenTransport|null findOneBy(array $criteria, array $orderBy = null)
 * @method MoyenTransport[]    findAll()
 * @method MoyenTransport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoyenTransportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MoyenTransport::class);
    }

//    /**
//     * @return MoyenTransport[] Returns an array of MoyenTransport objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MoyenTransport
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function SortBytype(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.type','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortBylieu()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.lieu','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortBycapacite()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.capacite','ASC')
        ->getQuery()
        ->getResult()
        ;
}
}
