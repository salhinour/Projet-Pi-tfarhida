<?php

namespace ContainerCm22vnA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GZcXYTbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GZcXYTb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GZcXYTb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'reponse' => ['privates', '.errored..service_locator.GZcXYTb.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.GZcXYTb": it references class "App\\Entity\\Reponse" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'reponse' => 'App\\Entity\\Reponse',
        ]);
    }
}
