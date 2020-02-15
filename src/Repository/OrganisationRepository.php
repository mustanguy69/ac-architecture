<?php

namespace App\Repository;

use App\Entity\Organisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class OrganisationRepository extends ServiceEntityRepository
{

  public function __construct(ManagerRegistry $registry)
  {
      parent::__construct($registry, Organisation::class);
  }

}
