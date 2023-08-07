<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Elasticsearch_Indexer_ProductService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_catalog.elasticsearch.indexer.product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Indexer\ProductIndexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Storage/Indexer/ProductIndexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Indexer/ProductIndexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/GetElasticsearchProductProjectionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ElasticsearchProjection/GetElasticsearchProductProjection.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['pim_catalog.elasticsearch.indexer.product'])) {
            return $container->services['pim_catalog.elasticsearch.indexer.product'];
        }
        $b = ($container->privates['pim_catalog.normalizer.indexing_product.product.product_value_collection'] ?? $container->load('getPimCatalog_Normalizer_IndexingProduct_Product_ProductValueCollectionService'));

        if (isset($container->services['pim_catalog.elasticsearch.indexer.product'])) {
            return $container->services['pim_catalog.elasticsearch.indexer.product'];
        }
        $c = ($container->privates['akeneo.pim.enrichment.factory.read_value_collection'] ?? $container->load('getAkeneo_Pim_Enrichment_Factory_ReadValueCollectionService'));

        if (isset($container->services['pim_catalog.elasticsearch.indexer.product'])) {
            return $container->services['pim_catalog.elasticsearch.indexer.product'];
        }

        return $container->services['pim_catalog.elasticsearch.indexer.product'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Indexer\ProductIndexer(($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService')), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ElasticsearchProjection\GetElasticsearchProductProjection($a, $b, $c, ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Elasticsearch\\GetDataQualityInsightsPropertiesForProductProjection'] ?? $container->load('getGetDataQualityInsightsPropertiesForProductProjectionService'));
        }, 1)));
    }
}
