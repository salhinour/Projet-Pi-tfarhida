<?php

namespace ContainerSpqBLgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminParameterControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminParameterController' shared autowired service.
     *
     * @return \App\Controller\AdminParameterController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminParameterController'] = $instance = new \App\Controller\AdminParameterController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\AdminParameterController', $container));

        return $instance;
    }
}
