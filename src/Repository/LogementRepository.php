<?php

namespace App\Repository;

use App\Entity\Logement;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Logement>
 *
 * @method Logement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Logement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Logement[]    findAll()
 * @method Logement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    
    {
        parent::__construct($registry, Logement::class);
    }
    /**
     * Finds all logements with etat = true
     *
     * @return Logement[] Returns an array of Logement objects
     */
    public function findByTypeAndEtat(string $selectedState): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.TypeLog = :TypeLog')
            ->setParameter('TypeLog', $selectedState)
            ->getQuery()
            ->getResult();
    }

    public function findAllWithEtatTrue(): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.Etat = :Etat')
            ->setParameter('Etat', 'Acceptee')
            ->getQuery()
            ->getResult();
    }

    public function findByTypeAndEtatTrue(string $selectedState): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.TypeLog = :TypeLog')
            ->andWhere('l.Etat = :Etat')
            ->setParameter('TypeLog', $selectedState)
            ->setParameter('Etat', 'Acceptee')
            ->getQuery()
            ->getResult();
    }

    public function findByType(string $type): array
{
    return $this->createQueryBuilder('l')
        ->andWhere('l.type = :type')
        ->setParameter('type', $type)
        ->getQuery()
        ->getResult();
}
    public function findByPrix($minPrice, $maxPrice)
{
    return $this->createQueryBuilder('l')
        ->andWhere('l.Prix >= :minPrice')
        ->andWhere('l.Prix <= :maxPrice')
        ->setParameter('minPrice', $minPrice)
        ->setParameter('maxPrice', $maxPrice)
        ->getQuery()
        ->getResult();
}
//    /**
//     * @return Logement[] Returns an array of Logement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Logement
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
function findMylogement(User $user){
    
    return $this->createQueryBuilder('t')
    ->where('t.user = :userId')
    ->setParameter('userId', $user)
    ->setMaxResults(6)
    ->getQuery()
    ->getResult();
}
/**
     * Récupère tous les sponsors actifs.
     *
     * @return Logements[] Returns an array of Sponsoring objects
     */
  
    public function removeByIds(array $ids): void
    {
        $qb = $this->createQueryBuilder('t')
            ->delete()
            ->where('t.id IN (:ids)')
            ->setParameter('ids', $ids);

        $query = $qb->getQuery();
        $query->execute();

        $this->getEntityManager()->flush();
    }
}
