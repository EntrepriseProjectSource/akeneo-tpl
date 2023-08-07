<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_AttributeGroupService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.attribute_group' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\AttributeGroupController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Controller/ExternalApi/AttributeGroupController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Repository/PageableRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Repository/ApiResourceRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Doctrine/ORM/Repository/ExternalApi/AttributeGroupRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Stream/StreamResourceResponse.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/UniqueValuesSet.php';

        $a = ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService'));

        return $container->services['pim_api.controller.attribute_group'] = new \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\AttributeGroupController(new \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\ExternalApi\AttributeGroupRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), 'Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup', ($container->privates['pim_catalog.repository.attribute_group'] ?? $container->load('getPimCatalog_Repository_AttributeGroupService')), $a), ($container->privates['pim_external_api_serializer'] ?? $container->load('getPimExternalApiSerializerService')), ($container->privates['pim_api.pagination.parameter_validator'] ?? $container->load('getPimApi_Pagination_ParameterValidatorService')), ($container->privates['pim_api.pagination.offset_hal_paginator'] ?? $container->load('getPimApi_Pagination_OffsetHalPaginatorService')), ($container->privates['pim_catalog.factory.attribute_group'] ?? ($container->privates['pim_catalog.factory.attribute_group'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup'))), ($container->privates['pim_catalog.updater.attribute_group'] ?? $container->load('getPimCatalog_Updater_AttributeGroupService')), $a, ($container->services['router'] ?? $container->getRouterService()), ($container->privates['pim_catalog.saver.attribute_group'] ?? $container->load('getPimCatalog_Saver_AttributeGroupService')), new \Akeneo\Tool\Bundle\ApiBundle\Stream\StreamResourceResponse(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['pim_catalog.validator.unique_value_set'] ?? ($container->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet())), $container->parameters['pim_api.configuration'], 'pim_api.controller.attribute_group:partialUpdateAction', 'code', 'code'), $container->parameters['pim_api.configuration']);
    }
}
