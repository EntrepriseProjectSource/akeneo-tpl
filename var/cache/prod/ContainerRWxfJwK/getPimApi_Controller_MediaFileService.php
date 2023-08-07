<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_MediaFileService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.media_file' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\MediaFileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/MediaFileController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Repository/PageableRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Repository/ApiResourceRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Doctrine/ORM/Repository/ApiResourceRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/FileStorage/File/FileFetcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/FileStorage/File/StreamedFileFetcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/RemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/BulkRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Remover/BaseRemover.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        return $container->services['pim_api.controller.media_file'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\MediaFileController(new \Akeneo\Tool\Bundle\ApiBundle\Doctrine\ORM\Repository\ApiResourceRepository($a, 'Akeneo\\Tool\\Component\\FileStorage\\Model\\FileInfo', ($container->privates['akeneo_file_storage.repository.file_info'] ?? $container->load('getAkeneoFileStorage_Repository_FileInfoService'))), ($container->privates['pim_external_api_serializer'] ?? $container->load('getPimExternalApiSerializerService')), ($container->privates['pim_api.pagination.parameter_validator'] ?? $container->load('getPimApi_Pagination_ParameterValidatorService')), ($container->privates['pim_api.pagination.offset_hal_paginator'] ?? $container->load('getPimApi_Pagination_OffsetHalPaginatorService')), ($container->privates['akeneo_file_storage.file_storage.filesystem_provider'] ?? $container->load('getAkeneoFileStorage_FileStorage_FilesystemProviderService')), new \Akeneo\Tool\Component\FileStorage\File\StreamedFileFetcher(), ($container->privates['pim_catalog.repository.product'] ?? $container->load('getPimCatalog_Repository_ProductService')), ($container->privates['pim_catalog.updater.product'] ?? $container->load('getPimCatalog_Updater_ProductService')), ($container->privates['pim_catalog.saver.product'] ?? $container->load('getPimCatalog_Saver_ProductService')), ($container->privates['pim_catalog.validator.product'] ?? $container->load('getPimCatalog_Validator_ProductService')), ($container->privates['akeneo_file_storage.saver.file'] ?? $container->load('getAkeneoFileStorage_Saver_FileService')), ($container->privates['akeneo_file_storage.file_storage.file.file_storer'] ?? $container->load('getAkeneoFileStorage_FileStorage_File_FileStorerService')), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Remover\BaseRemover($a, $b, 'Akeneo\\Tool\\Component\\FileStorage\\Model\\FileInfoInterface'), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['pim_catalog.repository.product_model'] ?? $container->load('getPimCatalog_Repository_ProductModelService')), ($container->privates['pim_api.updater.product_model'] ?? $container->load('getPimApi_Updater_ProductModelService')), ($container->privates['pim_catalog.saver.product_model'] ?? $container->load('getPimCatalog_Saver_ProductModelService')), $b, $container->parameters['pim_api.configuration']);
    }
}