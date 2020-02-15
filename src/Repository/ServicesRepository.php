<?php

namespace App\Repository;

use App\Entity\Services;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class ServicesRepository extends ServiceEntityRepository
{

  public function __construct(ManagerRegistry $registry)
  {
      parent::__construct($registry, Services::class);
  }

}
