<?php

namespace ContainerMMvaKKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IJqF3UIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IJqF3UI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IJqF3UI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'id' => ['privates', '.errored..service_locator.IJqF3UI.App\\Entity\\Activitee', NULL, 'Cannot autowire service ".service_locator.IJqF3UI": it references class "App\\Entity\\Activitee" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'id' => 'App\\Entity\\Activitee',
        ]);
    }
}
