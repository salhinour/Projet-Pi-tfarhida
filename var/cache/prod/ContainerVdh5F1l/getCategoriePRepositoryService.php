<?php

namespace ContainerVdh5F1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriePRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CategoriePRepository' shared autowired service.
     *
     * @return \App\Repository\CategoriePRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CategoriePRepository'] = new \App\Repository\CategoriePRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
