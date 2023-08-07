<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Query_ProductQueryBuilderFromSizeFactory_WithProductIdentifierCursorService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.query.product_query_builder_from_size_factory.with_product_identifier_cursor' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelQueryBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/ProductQueryBuilderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/ProductAndProductModelQueryBuilderFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cursor/CursorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/FromSizeIdentifierResultCursorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/ProductQueryBuilderOptionsResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/ProductQueryBuilderFromSizeOptionsResolver.php';

        $a = ($container->privates['pim_catalog.query.filter.product_and_product_model_registry'] ?? $container->load('getPimCatalog_Query_Filter_ProductAndProductModelRegistryService'));

        if (isset($container->privates['akeneo.pim.enrichment.query.product_query_builder_from_size_factory.with_product_identifier_cursor'])) {
            return $container->privates['akeneo.pim.enrichment.query.product_query_builder_from_size_factory.with_product_identifier_cursor'];
        }

        return $container->privates['akeneo.pim.enrichment.query.product_query_builder_from_size_factory.with_product_identifier_cursor'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductAndProductModelQueryBuilder', ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), $a, ($container->privates['pim_catalog.query.sorter.registry'] ?? $container->load('getPimCatalog_Query_Sorter_RegistryService')), new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\FromSizeIdentifierResultCursorFactory(($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService'))), ($container->privates['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] ?? ($container->privates['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFromSizeOptionsResolver())));
    }
}