<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\CompanyRelRoutingTag\CompanyRelRoutingTagRepository;
use Ivoz\Provider\Domain\Model\CompanyRelRoutingTag\CompanyRelRoutingTag;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * CompanyRelRoutingTagDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompanyRelRoutingTagDoctrineRepository extends ServiceEntityRepository implements CompanyRelRoutingTagRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CompanyRelRoutingTag::class);
    }
}