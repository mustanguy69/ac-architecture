<?php

namespace App\Repository;

use App\Entity\Individuel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class IndividuelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Individuel::class);
    }

    public function findByNot($field, $value)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->where($qb->expr()->not($qb->expr()->eq('a.'.$field, '?1')));
        $qb->setParameter(1, $value);

        return $qb->getQuery()
            ->getResult();
    }
}
