<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStoreFileCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Tool\Bundle\FileStorageBundle\Command\StoreFileCommand' shared service.
     *
     * @return \Akeneo\Tool\Bundle\FileStorageBundle\Command\StoreFileCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/FileStorageBundle/Command/StoreFileCommand.php';

        $container->privates['Akeneo\\Tool\\Bundle\\FileStorageBundle\\Command\\StoreFileCommand'] = $instance = new \Akeneo\Tool\Bundle\FileStorageBundle\Command\StoreFileCommand(($container->privates['akeneo_file_storage.file_storage.file.file_storer'] ?? $container->load('getAkeneoFileStorage_FileStorage_File_FileStorerService')), ($container->privates['akeneo_file_storage.file_storage.filesystem_provider'] ?? $container->load('getAkeneoFileStorage_FileStorage_FilesystemProviderService')));

        $instance->setName('akeneo:file-storage:store');

        return $instance;
    }
}
