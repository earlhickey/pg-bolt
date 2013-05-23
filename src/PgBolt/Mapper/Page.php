<?php

namespace PgBolt\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;
use PgBolt\Entity\PageInterface as PageEntityInterface;
use Zend\Stdlib\Hydrator\HydratorInterface;

class Page extends AbstractDbMapper implements PageInterface
{
    protected $tableName  = 'bolt_pages';
    
    public function findBySlug($slug)
    {
        $select = $this->getSelect()
                       ->where(array('slug' => $slug));

        $entity = $this->select($select)->current();
        $this->getEventManager()->trigger('find', $this, array('entity' => $entity));
        return $entity;
    }

    public function getTableName(){
        return $this->tableName;
    }
    
    public function setTableName($tableName){
        $this->tableName=$tableName;
    }
}
