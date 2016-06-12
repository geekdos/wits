<?php

namespace Wits\FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;


class CommitteeRepository extends EntityRepository
{
    
    public function getCommitteByNameAndConferenceEdition($committeeName, $edition){
        
        return $this->createQueryBuilder('c')
            ->join('c.conference', 'f')
            ->where('f.edition = :edition AND c.name = :name ')
            ->setParameter('edition', $edition)
            ->setParameter('name', $committeeName)
            ->getQuery()
            ->getResult();
        
    }
    
    public function getAllHonoraryCommittee(){

        $queryBuilder = $this->createQueryBuilder('c');

        $query = $queryBuilder
                ->select("c.members")
                ->where('c.name = ?1')
                ->setParameter(1, 'Steering Committee')
                ->getQuery();

        return $query->execute();

    }

    public function getAllOrganizingCommittee(){

    }

    public function getAllTechnicalProgramCommittee(){

    }

    public function getAllSteeringCommitteeChairs(){

    }

    public function getAllGeneralChairs(){

    }

    public function getAllPublicityAndCommunicationChairs(){

    }

    public function getAllPostersChairs(){

    }
}
