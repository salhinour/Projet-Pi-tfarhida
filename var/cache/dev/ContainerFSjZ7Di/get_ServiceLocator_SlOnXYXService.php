<?php

namespace ContainerFSjZ7Di;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SlOnXYXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SlOnXYX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SlOnXYX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Repository' => ['privates', 'App\\Repository\\LogementRepository', 'getLogementRepositoryService', true],
        ], [
            'Repository' => 'App\\Repository\\LogementRepository',
        ]);
    }
}