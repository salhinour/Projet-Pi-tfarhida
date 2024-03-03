<?php

namespace ContainerSpqBLgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationController1Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RegistrationController1' shared autowired service.
     *
     * @return \App\Controller\RegistrationController1
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RegistrationController1'] = $instance = new \App\Controller\RegistrationController1(($container->privates['App\\Security\\EmailVerifier'] ?? $container->load('getEmailVerifierService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\RegistrationController1', $container));

        return $instance;
    }
}
