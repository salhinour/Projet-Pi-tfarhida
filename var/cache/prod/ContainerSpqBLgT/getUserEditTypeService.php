<?php

namespace ContainerSpqBLgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserEditTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UserEditType' shared autowired service.
     *
     * @return \App\Form\UserEditType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UserEditType'] = new \App\Form\UserEditType();
    }
}