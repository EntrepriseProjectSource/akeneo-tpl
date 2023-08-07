<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsWithOptionsService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.product.connector.get_product_from_uuids_with_options' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Connector\SqlGetConnectorProductsWithOptions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/GetConnectorProducts.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Connector/SqlGetConnectorProductsWithOptions.php';

        return $container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids_with_options'] = new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Connector\SqlGetConnectorProductsWithOptions(($container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsService')), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}
