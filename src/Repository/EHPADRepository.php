<?php

namespace App\Repository;

use App\Entity\EHPAD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EHPAD|null find($id, $lockMode = null, $lockVersion = null)
 * @method EHPAD|null findOneBy(array $criteria, array $orderBy = null)
 * @method EHPAD[]    findAll()
 * @method EHPAD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EHPADRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EHPAD::class);
    }

    // /**
    //  * @return EHPAD[] Returns an array of EHPAD objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EHPAD
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByNot($field, $value)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->where($qb->expr()->not($qb->expr()->eq('a.'.$field, '?1')));
        $qb->setParameter(1, $value);

        return $qb->getQuery()
            ->getResult();
    }
}
