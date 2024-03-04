<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    public function SortByTitre(){
        return $this->createQueryBuilder('e')
            ->orderBy('e.titre','ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function SortByTypeDeReclamation(){
        return $this->createQueryBuilder('e')
            ->orderBy('e.type','ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    
    public function SortByDescriptionReclamation()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.description_reclamation','ASC')
            ->getQuery()
            ->getResult()
            ;
    }
    
    
    public function SortByDate()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.date','ASC')
            ->getQuery()
            ->getResult()
            ;
    }

//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
