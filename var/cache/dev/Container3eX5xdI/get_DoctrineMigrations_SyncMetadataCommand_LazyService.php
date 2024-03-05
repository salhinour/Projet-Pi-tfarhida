<?php

namespace Container3eX5xdI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_SyncMetadataCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine_migrations.sync_metadata_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.doctrine_migrations.sync_metadata_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:sync-metadata-storage', [], 'Ensures that the metadata storage is at the latest version.', false, function () use ($container): \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand {
            return ($container->privates['doctrine_migrations.sync_metadata_command'] ?? $container->load('getDoctrineMigrations_SyncMetadataCommandService'));
        });
    }
}
