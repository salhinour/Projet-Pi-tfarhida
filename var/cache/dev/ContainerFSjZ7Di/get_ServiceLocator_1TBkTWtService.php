<?php

namespace ContainerFSjZ7Di;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1TBkTWtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1TBkTWt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1TBkTWt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'entityManager' => '?',
            'parameterBag' => '?',
            'router' => '?',
        ]);
    }
}
