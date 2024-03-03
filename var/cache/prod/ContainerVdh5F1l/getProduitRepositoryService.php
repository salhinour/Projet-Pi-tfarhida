<?php

namespace ContainerVdh5F1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProduitRepository' shared autowired service.
     *
     * @return \App\Repository\ProduitRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProduitRepository'] = new \App\Repository\ProduitRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
