<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PedidoRepository extends EntityRepository
{
    public function getLastOrderNumber()
    {
        $query = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('MAX(p.numero)')
            ->from('AppBundle:Pedido', 'p')
            ->setMaxResults(1)
            ->getQuery();

        return $query->getSingleScalarResult();
    }
}