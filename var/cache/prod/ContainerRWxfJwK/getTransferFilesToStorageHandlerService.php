<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransferFilesToStorageHandlerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Platform\Bundle\ImportExportBundle\Application\TransferFilesToStorage\TransferFilesToStorageHandler' shared service.
     *
     * @return \Akeneo\Platform\Bundle\ImportExportBundle\Application\TransferFilesToStorage\TransferFilesToStorageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Application/TransferFilesToStorage/TransferFilesToStorageHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Domain/TransferFilesToStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Infrastructure/StorageClient/TransferFilesToStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Infrastructure/StorageClient/TransferFile.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Application\\TransferFilesToStorage\\TransferFilesToStorageHandler'])) {
            return $container->services['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Application\\TransferFilesToStorage\\TransferFilesToStorageHandler'];
        }

        return $container->services['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Application\\TransferFilesToStorage\\TransferFilesToStorageHandler'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Application\TransferFilesToStorage\TransferFilesToStorageHandler(($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\Hydrator\\StorageHydrator'] ?? $container->load('getStorageHydratorService')), new \Akeneo\Platform\Bundle\ImportExportBundle\Infrastructure\StorageClient\TransferFilesToStorage(($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\StorageClient\\StorageClientProvider'] ?? $container->load('getStorageClientProviderService')), ($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\StorageClient\\TransferFile'] ?? ($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\StorageClient\\TransferFile'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Infrastructure\StorageClient\TransferFile())), $a), ($container->services['feature_flags'] ?? $container->getFeatureFlagsService()));
    }
}
