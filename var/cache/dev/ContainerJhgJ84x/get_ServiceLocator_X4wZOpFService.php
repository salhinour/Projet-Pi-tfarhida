<?php

namespace ContainerJhgJ84x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X4wZOpFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x4wZOpF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x4wZOpF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}
