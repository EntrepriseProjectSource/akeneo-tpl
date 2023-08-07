<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_ProductService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/ProductController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Stream/StreamResourceResponse.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/ListProductsQueryHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/UniqueValuesSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Cache/WarmupQueryCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/DummyWarmupQueryCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Checker/DuplicateValueChecker.php';

        $a = ($container->privates['pim_catalog.builder.product'] ?? $container->load('getPimCatalog_Builder_ProductService'));
        $b = ($container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsService'));
        $c = ($container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids_with_options'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsWithOptionsService'));
        $d = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());
        $e = ($container->privates['akeneo.pim.enrichment.use_cases.get_products_with_quality_scores'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_GetProductsWithQualityScoresService'));
        $f = ($container->privates['akeneo.pim.enrichment.use_cases.get_products_with_completenesses'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_GetProductsWithCompletenessesService'));

        return $container->services['pim_api.controller.product'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\ProductController(($container->privates['pim_external_api_serializer'] ?? $container->load('getPimExternalApiSerializerService')), ($container->privates['pim_api.repository.channel'] ?? $container->load('getPimApi_Repository_ChannelService')), ($container->privates['pim_api.repository.attribute'] ?? $container->load('getPimApi_Repository_AttributeService')), ($container->privates['pim_catalog.repository.product'] ?? $container->load('getPimCatalog_Repository_ProductService')), ($container->privates['pim_api.pagination.offset_hal_paginator'] ?? $container->load('getPimApi_Pagination_OffsetHalPaginatorService')), ($container->privates['pim_api.pagination.search_after_hal_paginator'] ?? $container->load('getPimApi_Pagination_SearchAfterHalPaginatorService')), ($container->privates['pim_catalog.validator.product'] ?? $container->load('getPimCatalog_Validator_ProductService')), $a, ($container->privates['pim_catalog.remover.product'] ?? $container->load('getPimCatalog_Remover_ProductService')), ($container->privates['pim_catalog.updater.product'] ?? $container->load('getPimCatalog_Updater_ProductService')), ($container->privates['pim_catalog.saver.product'] ?? $container->load('getPimCatalog_Saver_ProductService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['pim_catalog.comparator.filter.product'] ?? $container->load('getPimCatalog_Comparator_Filter_ProductService')), new \Akeneo\Tool\Bundle\ApiBundle\Stream\StreamResourceResponse(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['pim_catalog.validator.unique_value_set'] ?? ($container->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet())), $container->parameters['pim_api.configuration'], 'pim_api.controller.product:partialUpdateAction', 'identifier', 'code'), ($container->privates['pim_catalog.query.product_query_builder_from_size_factory'] ?? $container->load('getPimCatalog_Query_ProductQueryBuilderFromSizeFactoryService')), $a, ($container->privates['pim_api.filter.product_attribute_filter'] ?? $container->load('getPimApi_Filter_ProductAttributeFilterService')), ($container->privates['pim_catalog.entity_with_family_variant.add_parent_to_product'] ?? $container->load('getPimCatalog_EntityWithFamilyVariant_AddParentToProductService')), ($container->privates['pim_enrich.connector.use_cases.validator.list_products'] ?? $container->load('getPimEnrich_Connector_UseCases_Validator_ListProductsService')), $container->parameters['pim_api.configuration'], new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\ListProductsQueryHandler(($container->privates['pim_catalog.repository.cached_channel'] ?? $container->load('getPimCatalog_Repository_CachedChannelService')), ($container->privates['akeneo.pim.enrichment.use_cases.apply_product_search_query_parameters_to_pqb'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_ApplyProductSearchQueryParametersToPqbService')), ($container->privates['pim_catalog.query.product_query_builder_from_size_factory_external_api'] ?? $container->load('getPimCatalog_Query_ProductQueryBuilderFromSizeFactoryExternalApiService')), ($container->privates['pim_catalog.query.product_query_builder_search_after_size_factory_external_api'] ?? $container->load('getPimCatalog_Query_ProductQueryBuilderSearchAfterSizeFactoryExternalApiService')), $b, $c, $d, $e, $f, ($container->privates['akeneo.pim.enrichment.product.query.find_id'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_FindIdService'))), ($container->privates['pim_api.normalizer.connector_products'] ?? $container->load('getPimApi_Normalizer_ConnectorProductsService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $b, $c, ($container->privates['pim_catalog.event_subscriber.product.on_save.api_aggregator_event_subscriber'] ?? $container->load('getPimCatalog_EventSubscriber_Product_OnSave_ApiAggregatorEventSubscriberService')), ($container->privates['pim_api.warmup_query_cache.dummy'] ?? ($container->privates['pim_api.warmup_query_cache.dummy'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\DummyWarmupQueryCache())), $d, ($container->privates['pim_api.checker.duplicate_value'] ?? ($container->privates['pim_api.checker.duplicate_value'] = new \Akeneo\Tool\Bundle\ApiBundle\Checker\DuplicateValueChecker())), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), $e, ($container->privates['pim_catalog.entity_with_family_variant.remove_parent_from_product'] ?? $container->load('getPimCatalog_EntityWithFamilyVariant_RemoveParentFromProductService')), $f, ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Storage\\Sql\\Product\\SqlFindProductUuids'] ?? $container->load('getSqlFindProductUuidsService')));
    }
}