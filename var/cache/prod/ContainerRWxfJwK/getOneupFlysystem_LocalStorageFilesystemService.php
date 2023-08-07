<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupFlysystem_LocalStorageFilesystemService extends KernelProdContainer
{
    /*
     * Gets the public 'oneup_flysystem.local_storage_filesystem' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemOperator.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/CalculateChecksumFromStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Filesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ChecksumProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem-local/LocalFilesystemAdapter.php';

        return $container->services['oneup_flysystem.local_storage_filesystem'] = new \League\Flysystem\Filesystem(new \League\Flysystem\Local\LocalFilesystemAdapter('/', NULL, 2, 2, NULL), []);
    }
}
