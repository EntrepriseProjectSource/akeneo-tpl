<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_FamilyService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.family' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\FamilyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Controller/ExternalApi/FamilyController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Stream/StreamResourceResponse.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/UniqueValuesSet.php';

        return $container->services['pim_api.controller.family'] = new \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\FamilyController(($container->privates['pim_api.repository.family'] ?? $container->load('getPimApi_Repository_FamilyService')), ($container->privates['pim_external_api_serializer'] ?? $container->load('getPimExternalApiSerializerService')), ($container->privates['pim_catalog.factory.family'] ?? $container->load('getPimCatalog_Factory_FamilyService')), ($container->privates['pim_catalog.updater.family'] ?? $container->load('getPimCatalog_Updater_FamilyService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['pim_catalog.saver.family'] ?? $container->load('getPimCatalog_Saver_FamilyService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['pim_api.pagination.offset_hal_paginator'] ?? $container->load('getPimApi_Pagination_OffsetHalPaginatorService')), ($container->privates['pim_api.pagination.parameter_validator'] ?? $container->load('getPimApi_Pagination_ParameterValidatorService')), new \Akeneo\Tool\Bundle\ApiBundle\Stream\StreamResourceResponse(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['pim_catalog.validator.unique_value_set'] ?? ($container->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet())), $container->parameters['pim_api.configuration'], 'pim_api.controller.family:partialUpdateAction', 'code', 'code'), $container->parameters['pim_api.configuration']);
    }
}