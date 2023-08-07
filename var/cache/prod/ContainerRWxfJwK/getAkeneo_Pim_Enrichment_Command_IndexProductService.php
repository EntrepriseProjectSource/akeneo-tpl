<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Command_IndexProductService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.command.index_product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Command\IndexProductCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/IndexProductCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/ElasticsearchAndSql/ProductAndProductModel/GetProductUuidsNotSynchronisedBetweenEsAndMysql.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/ElasticsearchAndSql/ProductAndProductModel/GetExistingProductUuids.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/ElasticsearchAndSql/ProductAndProductModel/GetAllProductUuids.php';

        $a = ($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService'));
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        $container->privates['akeneo.pim.enrichment.command.index_product'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Command\IndexProductCommand(($container->privates['akeneo.pim.enrichment.elasticsearch.indexer.product_and_ancestors'] ?? $container->load('getAkeneo_Pim_Enrichment_Elasticsearch_Indexer_ProductAndAncestorsService')), $a, new \Akeneo\Pim\Enrichment\Bundle\Storage\ElasticsearchAndSql\ProductAndProductModel\GetProductUuidsNotSynchronisedBetweenEsAndMysql($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Storage\ElasticsearchAndSql\ProductAndProductModel\GetExistingProductUuids($b), new \Akeneo\Pim\Enrichment\Bundle\Storage\ElasticsearchAndSql\ProductAndProductModel\GetAllProductUuids($b, NULL));

        $instance->setName('pim:product:index');

        return $instance;
    }
}