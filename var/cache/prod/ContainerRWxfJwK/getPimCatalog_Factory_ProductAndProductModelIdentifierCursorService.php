<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Factory_ProductAndProductModelIdentifierCursorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.factory.product_and_product_model_identifier_cursor' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\IdentifierCursorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cursor/CursorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/IdentifierCursorFactory.php';

        return $container->privates['pim_catalog.factory.product_and_product_model_identifier_cursor'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\IdentifierCursorFactory(($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService')), 500);
    }
}