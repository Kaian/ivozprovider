<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\CallCsvReport\CallCsvReport;
use Ivoz\Provider\Domain\Model\CallCsvReport\CallCsvReportRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * CallCsvReportsDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CallCsvReportDoctrineRepository extends ServiceEntityRepository implements CallCsvReportRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CallCsvReport::class);
    }
}