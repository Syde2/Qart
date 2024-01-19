<?php

namespace App\Repository;

use App\Entity\QuantitesIngredients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuantitesIngredients>
 *
 * @method QuantitesIngredients|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuantitesIngredients|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuantitesIngredients[]    findAll()
 * @method QuantitesIngredients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuantitesIngredientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuantitesIngredients::class);
    }

//    /**
//     * @return QuantitesIngredients[] Returns an array of QuantitesIngredients objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?QuantitesIngredients
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
