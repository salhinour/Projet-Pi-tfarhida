<?php

namespace ContainerVdh5F1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationFormType1Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RegistrationFormType1' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType1
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RegistrationFormType1'] = new \App\Form\RegistrationFormType1();
    }
}
