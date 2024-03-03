<?php

namespace ContainerSpqBLgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_CurrentCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.current_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.current_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:current', [], 'Outputs the current version', false, function () use ($container): \Doctrine\Migrations\Tools\Console\Command\CurrentCommand {
            return ($container->privates['doctrine_migrations.current_command'] ?? $container->load('getDoctrineMigrations_CurrentCommandService'));
        });
    }
}
