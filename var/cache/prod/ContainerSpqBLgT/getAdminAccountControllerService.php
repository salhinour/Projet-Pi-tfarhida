<?php

namespace ContainerSpqBLgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminAccountControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminAccountController' shared autowired service.
     *
     * @return \App\Controller\AdminAccountController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminAccountController'] = $instance = new \App\Controller\AdminAccountController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\AdminAccountController', $container));

        return $instance;
    }
}
