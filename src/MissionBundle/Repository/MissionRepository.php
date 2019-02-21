<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 16/02/2019
 * Time: 14:57
 */

namespace MissionBundle\Repository;


class MissionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByNom($nom){

        $query=$this->getEntityManager()->createQuery("SELECT m from MissionBundle:Mission m where m.nom<'$nom'");

        return $query->getResult();

    }
    public function computeDQL($id){
        $qb=$this->getEntityManager()
            ->createQuery("SELECT COUNT (c) as nb 
                            FROM MissionBundle:Mission e 
                            WHERE c.categorie=:n")
            ->setParameter('n',$id);
        return $qb->getResult();
    }

}