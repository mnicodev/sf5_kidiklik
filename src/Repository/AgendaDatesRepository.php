<?php

namespace App\Repository;

use App\Entity\AgendaDates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgendaDates|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgendaDates|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgendaDates[]    findAll()
 * @method AgendaDates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgendaDatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgendaDates::class);
    }

    // /**
    //  * @return AgendaDates[] Returns an array of AgendaDates objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgendaDates
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
