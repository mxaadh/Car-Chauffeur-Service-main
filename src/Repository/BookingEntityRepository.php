<?php

namespace App\Repository;

use App\Entity\BookingEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BookingEntity>
 *
 * @method BookingEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookingEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookingEntity[]    findAll()
 * @method BookingEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookingEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookingEntity::class);
    }

    //    /**
    //     * @return BookingEntity[] Returns an array of BookingEntity objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?BookingEntity
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
