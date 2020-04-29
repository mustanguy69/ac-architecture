<?php

namespace App\Repository;

use App\Entity\Realisations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Realisations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Realisations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Realisations[]    findAll()
 * @method Realisations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RealisationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Realisations::class);
    }

    // /**
    //  * @return Presentations[] Returns an array of Presentations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Presentations
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
