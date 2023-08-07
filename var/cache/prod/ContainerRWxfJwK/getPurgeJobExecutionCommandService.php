<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurgeJobExecutionCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Platform\Bundle\ImportExportBundle\Command\PurgeJobExecutionCommand' shared service.
     *
     * @return \Akeneo\Platform\Bundle\ImportExportBundle\Command\PurgeJobExecutionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Command/PurgeJobExecutionCommand.php';

        $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Command\\PurgeJobExecutionCommand'] = $instance = new \Akeneo\Platform\Bundle\ImportExportBundle\Command\PurgeJobExecutionCommand(($container->privates['akeneo.platform.import_export.purge_job_execution'] ?? $container->load('getAkeneo_Platform_ImportExport_PurgeJobExecutionService')));

        $instance->setName('akeneo:batch:purge-job-execution');

        return $instance;
    }
}