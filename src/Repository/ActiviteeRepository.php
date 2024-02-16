<?php

namespace App\Repository;

use App\Entity\Activitee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activitee>
 *
 * @method Activitee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activitee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activitee[]    findAll()
 * @method Activitee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activitee::class);
    }
        /**
     * Finds all logements with etat = true
     *
     * @return Activitee[] Returns an array of Logement objects
     */

    public function findAllWithEtatTrue(): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.etat = :etat')
            ->setParameter('etat', true)
            ->getQuery()
            ->getResult();
    }
    }

//    /**
//     * @return Activitee[] Returns an array of Activitee objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Activitee
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

