<?php

namespace ContainerQ4eirzN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HvaqRN9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HvaqRN9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HvaqRN9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'id' => ['privates', '.errored..service_locator.HvaqRN9.App\\Entity\\Logement', NULL, 'Cannot autowire service ".service_locator.HvaqRN9": it references class "App\\Entity\\Logement" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'id' => 'App\\Entity\\Logement',
        ]);
    }
}