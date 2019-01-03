<?php

namespace DentalClinicBundle\Repository;

/**
 * OrderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrderRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByFilters( $parameters)
    {
        $query = $this->createQueryBuilder('o')
            ->join('o.material', 'm')
            ->where('o.status = :status')
            ->andWhere('m.supplier = :supplier' )
            ->setParameters($parameters)
            ->getQuery()
            ->getResult();

        return $query;

    }
}