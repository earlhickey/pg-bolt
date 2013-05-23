<?php
/**
 *
 * pgBolt Module
 *
 * @author pG
 * @package pgBolt
 *
 */
namespace PgBolt;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
         return array(
            'factories' => array(
                'pg_bolt_page_mapper' => function ($sm) {
                    $mapper = new Mapper\Page();
                    $mapper->setDbAdapter($sm->get('Zend\Db\Adapter\Adapter'));
                    $mapper->setEntityPrototype(new Entity\Page());
                    $mapper->setHydrator(new Mapper\PageHydrator());
                    return $mapper;
                },
                'pg_bolt_entry_mapper' => function ($sm) {
                    $mapper = new Mapper\Entry();
                    $mapper->setDbAdapter($sm->get('Zend\Db\Adapter\Adapter'));
                    $mapper->setEntityPrototype(new Entity\Entry());
                    $mapper->setHydrator(new Mapper\EntryHydrator());
                    return $mapper;
                },
            ),
        );
    }
}
