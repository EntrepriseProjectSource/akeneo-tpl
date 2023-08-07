<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurgeCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Tool\Bundle\VersioningBundle\Command\PurgeCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Tool\\Bundle\\VersioningBundle\\Command\\PurgeCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pim:versioning:purge', [], 'Purge versions of entities, except first and last versions.', false, function () use ($container): \Akeneo\Tool\Bundle\VersioningBundle\Command\PurgeCommand {
            return ($container->privates['Akeneo\\Tool\\Bundle\\VersioningBundle\\Command\\PurgeCommand'] ?? $container->load('getPurgeCommandService'));
        });
    }
}
