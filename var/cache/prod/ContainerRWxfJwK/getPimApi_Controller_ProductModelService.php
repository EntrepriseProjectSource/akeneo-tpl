<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_ProductModelService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.product_model' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\ProductModelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/ProductModelController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/ProductQueryBuilderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/ProductQueryBuilderFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cursor/CursorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/SearchAfterSizeIdentifierResultCursorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/ProductModel/Filter/AttributeFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/ProductModel/Filter/ProductModelAttributeFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Stream/StreamResourceResponse.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ListProductModelsQueryValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/ListProductModelsQueryHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/FromSizeIdentifierResultCursorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/GetProductModelsWithQualityScoresInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/GetProductModelsWithQualityScores.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/ProductQueryBuilderOptionsResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/ProductQueryBuilderSearchAfterOptionsResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/UniqueValuesSet.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateCriterion.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateGrantedSearchLocaleInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAlwaysGrantedSearchLocale.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateGrantedCategoriesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAlwaysGrantedCategories.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateGrantedPropertiesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAlwaysGrantedProperties.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateGrantedAttributesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAlwaysGrantedAttributes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateGrantedLocalesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAlwaysGrantedLocales.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/ProductQueryBuilderFromSizeOptionsResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ApiBundle/Cache/WarmupQueryCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/DummyWarmupQueryCache.php';

        $a = ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService'));
        $b = ($container->privates['pim_catalog.query.filter.product_model_registry'] ?? $container->load('getPimCatalog_Query_Filter_ProductModelRegistryService'));
        $c = ($container->privates['pim_catalog.query.sorter.registry'] ?? $container->load('getPimCatalog_Query_Sorter_RegistryService'));
        $d = ($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService'));
        $e = ($container->privates['pim_catalog.elasticsearch.product_query_builder_search_after_resolver'] ?? ($container->privates['pim_catalog.elasticsearch.product_query_builder_search_after_resolver'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderSearchAfterOptionsResolver()));
        $f = ($container->privates['pim_catalog.repository.product_model'] ?? $container->load('getPimCatalog_Repository_ProductModelService'));
        $g = ($container->privates['akeneo.pim.enrichment.product.connector.get_product_models_from_codes'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductModelsFromCodesService'));
        $h = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\GetProductModelsWithQualityScores(($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\PublicApi\\Query\\ProductEvaluation\\GetProductModelScoresQuery'] ?? $container->load('getGetProductModelScoresQuery2Service')), ($container->services['akeneo.pim.automation.data_quality_insights.feature'] ?? ($container->services['akeneo.pim.automation.data_quality_insights.feature'] = new \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag($container->getEnv('bool:FLAG_DATA_QUALITY_INSIGHTS_ENABLED')))));

        return $container->services['pim_api.controller.product_model'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\ProductModelController(($container->privates['pim_catalog.query.product_model_query_builder_factory'] ?? $container->load('getPimCatalog_Query_ProductModelQueryBuilderFactoryService')), new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductModelQueryBuilder', $a, $b, $c, new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\SearchAfterSizeIdentifierResultCursorFactory($d), $e), ($container->privates['pim_external_api_serializer'] ?? $container->load('getPimExternalApiSerializerService')), ($container->privates['pim_api.repository.channel'] ?? $container->load('getPimApi_Repository_ChannelService')), ($container->privates['pim_api.pagination.offset_hal_paginator'] ?? $container->load('getPimApi_Pagination_OffsetHalPaginatorService')), ($container->privates['pim_api.pagination.search_after_hal_paginator'] ?? $container->load('getPimApi_Pagination_SearchAfterHalPaginatorService')), ($container->privates['pim_api.updater.product_model'] ?? $container->load('getPimApi_Updater_ProductModelService')), ($container->privates['pim_catalog.factory.product_model'] ?? ($container->privates['pim_catalog.factory.product_model'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModel'))), ($container->privates['pim_catalog.saver.product_model'] ?? $container->load('getPimCatalog_Saver_ProductModelService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['pim_catalog.validator.product'] ?? $container->load('getPimCatalog_Validator_ProductService')), new \Akeneo\Pim\Enrichment\Component\Product\ProductModel\Filter\ProductModelAttributeFilter(($container->privates['pim_catalog.repository.family_variant'] ?? $container->load('getPimCatalog_Repository_FamilyVariantService')), $f, ($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService'))), $f, new \Akeneo\Tool\Bundle\ApiBundle\Stream\StreamResourceResponse(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['pim_catalog.validator.unique_value_set'] ?? ($container->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet())), $container->parameters['pim_api.configuration'], 'pim_api.controller.product_model:partialUpdateAction', 'code', 'code'), new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ListProductModelsQueryValidator(($container->privates['akeneo.pim.enrichment.use_cases.validator.attributes'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_AttributesService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.channel'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_ChannelService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.locales'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_LocalesService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.pagination'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_PaginationService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.criterion'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.criterion'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateCriterion())), ($container->privates['akeneo.pim.enrichment.use_cases.validator.categories'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_CategoriesService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.properties'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_PropertiesService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.search_locale'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_Validator_SearchLocaleService')), ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_search_locale'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_search_locale'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAlwaysGrantedSearchLocale())), ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_categories'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_categories'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAlwaysGrantedCategories())), ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_properties'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_properties'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAlwaysGrantedProperties())), ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_attributes'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_attributes'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAlwaysGrantedAttributes())), ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_locales'] ?? ($container->privates['akeneo.pim.enrichment.use_cases.validator.validate_granted_locales'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAlwaysGrantedLocales()))), new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\ListProductModelsQueryHandler(($container->privates['akeneo.pim.enrichment.use_cases.apply_product_search_query_parameters_to_pqb'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_ApplyProductSearchQueryParametersToPqbService')), new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductModelQueryBuilder', $a, $b, $c, new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\FromSizeIdentifierResultCursorFactory($d), ($container->privates['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] ?? ($container->privates['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFromSizeOptionsResolver()))), new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductModelQueryBuilder', $a, $b, $c, new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\SearchAfterSizeIdentifierResultCursorFactory($d), $e), $g, ($container->privates['pim_catalog.repository.cached_channel'] ?? $container->load('getPimCatalog_Repository_CachedChannelService')), ($container->privates['akeneo.pim.enrichment.product_model.query.find_id'] ?? $container->load('getAkeneo_Pim_Enrichment_ProductModel_Query_FindIdService')), $h), ($container->privates['pim_api.normalizer.connector_product_models'] ?? $container->load('getPimApi_Normalizer_ConnectorProductModelsService')), $g, ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['pim_catalog.event_subscriber.product_model.on_save.api_aggregator_event_subscriber'] ?? $container->load('getPimCatalog_EventSubscriber_ProductModel_OnSave_ApiAggregatorEventSubscriberService')), ($container->privates['pim_api.warmup_query_cache.dummy'] ?? ($container->privates['pim_api.warmup_query_cache.dummy'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\DummyWarmupQueryCache())), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), $container->parameters['pim_api.configuration'], ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Command\\ProductModel\\RemoveProductModelHandler'] ?? $container->load('getRemoveProductModelHandlerService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), $h);
    }
}