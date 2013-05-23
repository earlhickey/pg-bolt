<?php

namespace PgBolt\Mapper;

use Zend\Stdlib\Hydrator\ClassMethods;
use PgBolt\Entity\EntryInterface as EntryEntityInterface;

class EntryHydrator extends ClassMethods
{
    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     * @throws Exception\InvalidArgumentException
     */
    public function extract($object)
    {
        if (!$object instanceof EntryEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of PgBolt\Entity\EntryInterface');
        }
        /* @var $object EntryInterface*/
        $data = parent::extract($object);

        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return EntryInterface
     * @throws Exception\InvalidArgumentException
     */
    public function hydrate(array $data, $object)
    {
        if (!$object instanceof EntryEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of PgBolt\Entity\EntryInterface');
        }

        return parent::hydrate($data, $object);
    }

}
