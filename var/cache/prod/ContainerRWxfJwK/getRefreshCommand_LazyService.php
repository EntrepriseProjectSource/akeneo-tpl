<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRefreshCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Tool\Bundle\VersioningBundle\Command\RefreshCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Tool\\Bundle\\VersioningBundle\\Command\\RefreshCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pim:versioning:refresh', [], 'Version any updated entities', false, function () use ($container): \Akeneo\Tool\Bundle\VersioningBundle\Command\RefreshCommand {
            return ($container->privates['Akeneo\\Tool\\Bundle\\VersioningBundle\\Command\\RefreshCommand'] ?? $container->load('getRefreshCommandService'));
        });
    }
}
