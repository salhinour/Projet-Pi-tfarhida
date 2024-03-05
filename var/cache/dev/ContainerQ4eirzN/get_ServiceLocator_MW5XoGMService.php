<?php

namespace ContainerQ4eirzN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MW5XoGMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MW5XoGM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MW5XoGM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'reclamation' => ['privates', '.errored..service_locator.MW5XoGM.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.MW5XoGM": it references class "App\\Entity\\Reclamation" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'reclamation' => 'App\\Entity\\Reclamation',
        ]);
    }
}
