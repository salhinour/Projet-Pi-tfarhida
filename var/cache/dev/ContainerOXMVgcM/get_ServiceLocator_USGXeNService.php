<?php

namespace ContainerOXMVgcM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_USGXeNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uSGXe_N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uSGXe_N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.uSGXe_N.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.uSGXe_N": it references class "App\\Entity\\Categorie" but no such service exists.'],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
        ]);
    }
}
