<?php

namespace ContainerVdh5F1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieADOPRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CategorieADOPRepository' shared autowired service.
     *
     * @return \App\Repository\CategorieADOPRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CategorieADOPRepository'] = new \App\Repository\CategorieADOPRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}