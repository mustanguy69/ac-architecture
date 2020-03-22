<?php

namespace App\Repository;

use App\Entity\EHPAD;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class EHPADRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EHPAD::class);
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
