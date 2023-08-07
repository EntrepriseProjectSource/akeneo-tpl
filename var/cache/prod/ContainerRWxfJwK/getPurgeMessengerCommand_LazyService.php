<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurgeMessengerCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Tool\Bundle\MessengerBundle\Command\PurgeMessengerCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Tool\\Bundle\\MessengerBundle\\Command\\PurgeMessengerCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('akeneo:messenger:doctrine:purge-messages', [], 'Purges the messenger SQL table in terms of the given retention time (default is 7200 seconds)', false, function () use ($container): \Akeneo\Tool\Bundle\MessengerBundle\Command\PurgeMessengerCommand {
            return ($container->privates['Akeneo\\Tool\\Bundle\\MessengerBundle\\Command\\PurgeMessengerCommand'] ?? $container->load('getPurgeMessengerCommandService'));
        });
    }
}
