<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAggregateVolumesCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Command\AggregateVolumesCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Platform\\Bundle\\CatalogVolumeMonitoringBundle\\Command\\AggregateVolumesCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pim:volume:aggregate', [], 'Aggregate the result of all the volume queries that should not be executed live', false, function () use ($container): \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Command\AggregateVolumesCommand {
            return ($container->privates['Akeneo\\Platform\\Bundle\\CatalogVolumeMonitoringBundle\\Command\\AggregateVolumesCommand'] ?? $container->load('getAggregateVolumesCommandService'));
        });
    }
}