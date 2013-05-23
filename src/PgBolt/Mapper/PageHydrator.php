<?php

namespace PgBolt\Mapper;

use Zend\Stdlib\Hydrator\ClassMethods;
use PgBolt\Entity\PageInterface as PageEntityInterface;

class PageHydrator extends ClassMethods
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
        if (!$object instanceof PageEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of PgBolt\Entity\PageInterface');
        }
        /* @var $object PageInterface*/
        $data = parent::extract($object);

        return $data;
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return PageInterface
     * @throws Exception\InvalidArgumentException
     */
    public function hydrate(array $data, $object)
    {
        if (!$object instanceof PageEntityInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of PgBolt\Entity\PageInterface');
        }

        return parent::hydrate($data, $object);
    }

}
