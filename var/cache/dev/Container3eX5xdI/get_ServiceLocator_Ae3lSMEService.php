<?php

namespace Container3eX5xdI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ae3lSMEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ae3lSME' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ae3lSME'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activiteeRepository' => ['privates', 'App\\Repository\\ActiviteeRepository', 'getActiviteeRepositoryService', true],
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'activiteeRepository' => 'App\\Repository\\ActiviteeRepository',
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'paginator' => '?',
        ]);
    }
}
