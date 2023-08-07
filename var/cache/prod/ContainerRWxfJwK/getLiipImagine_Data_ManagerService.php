<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Data_ManagerService extends KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Data/DataManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Binary/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Imagine/FlysystemLoader.php';

        $container->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($container->privates['liip_imagine.binary.mime_type_guesser'] ?? $container->load('getLiipImagine_Binary_MimeTypeGuesserService')), \Symfony\Component\Mime\MimeTypes::getDefault(), ($container->privates['liip_imagine.filter.configuration'] ?? $container->load('getLiipImagine_Filter_ConfigurationService')), 'flysystem_data_loader', NULL);

        $instance->addLoader('default', ($container->services['liip_imagine.binary.loader.default'] ?? $container->load('getLiipImagine_Binary_Loader_DefaultService')));
        $instance->addLoader('flysystem_data_loader', new \Akeneo\Platform\Bundle\UIBundle\Imagine\FlysystemLoader(($container->privates['akeneo_file_storage.file_storage.filesystem_provider'] ?? $container->load('getAkeneoFileStorage_FileStorage_FilesystemProviderService')), [0 => 'catalogStorage'], ($container->privates['akeneo_file_storage.repository.file_info'] ?? $container->load('getAkeneoFileStorage_Repository_FileInfoService'))));
        $instance->addLoader('flysystem_category_data_loader', ($container->privates['Akeneo\\Category\\Infrastructure\\FileSystem\\Loader\\ImageLoader'] ?? $container->load('getImageLoaderService')));

        return $instance;
    }
}
