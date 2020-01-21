<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\DdiProviderRegistration\DdiProviderRegistration;
use Ivoz\Provider\Domain\Model\DdiProviderRegistration\DdiProviderRegistrationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * DdiProviderRegistrationDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DdiProviderRegistrationDoctrineRepository extends ServiceEntityRepository implements DdiProviderRegistrationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DdiProviderRegistration::class);
    }
}
