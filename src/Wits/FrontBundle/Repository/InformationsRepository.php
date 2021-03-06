<?php

namespace Wits\FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * InformationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InformationsRepository extends EntityRepository
{
    public function getVenusByConferenceEdition($edition){
        return $this->createQueryBuilder('i')
            ->join('i.conference', 'c')
            ->where('c.edition = :edition AND i.online = :status ')
            ->setParameter('edition', $edition)
            ->setParameter('status', true)
            ->getQuery()
            ->getResult();
    }
}
