<?php

namespace ContainerMMvaKKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N99EPpRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n99EPpR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n99EPpR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitee' => ['privates', '.errored..service_locator.n99EPpR.App\\Entity\\Activitee', NULL, 'Cannot autowire service ".service_locator.n99EPpR": it references class "App\\Entity\\Activitee" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
        ], [
            'activitee' => 'App\\Entity\\Activitee',
            'entityManager' => '?',
            'parameterBag' => '?',
        ]);
    }
}
