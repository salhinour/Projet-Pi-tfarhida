<?php

namespace ContainerVdh5F1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReponseRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ReponseRepository' shared autowired service.
     *
     * @return \App\Repository\ReponseRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ReponseRepository'] = new \App\Repository\ReponseRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}