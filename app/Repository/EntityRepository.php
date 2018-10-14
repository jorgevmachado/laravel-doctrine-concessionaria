<?php

namespace App\Repository;

use App\RepositoryFilter\AbstractQueryFilter;
use Doctrine\ORM\EntityRepository as BaseEntityRepository;

class EntityRepository extends BaseEntityRepository
{
    public function add($object)
    {
        $this->checkSelfObject($object);
        $this->_em->persist($object);
    }

    public function remove($object)
    {
        $this->checkSelfObject($object);
        $this->_em->remove($object);
    }

    /**
     * @param $object
     * @throws \InvalidArgumentException
     */
    public function checkSelfObject($object)
    {
      if (!is_object($object) || false === strstr(get_class($object), $this->getClassName())){
          $exceptionMessage = sprintf('expects %s object, %s given', $this->getClassName(), gettype($object));
          if(is_object($object)) {
              $exceptionMessage = sprintf('expects %s object, %s given', $this->getClassName(), get_class($object));
          }
          throw \InvalidArgumentException($exceptionMessage);
      }
    }

    public function findByFilter(AbstractQueryFilter $filter)
    {
        $qb = $this->createQueryBuilder('_filter');
        $filter->apply($qb);
        return $qb->getQuery()->getResult();
    }


}