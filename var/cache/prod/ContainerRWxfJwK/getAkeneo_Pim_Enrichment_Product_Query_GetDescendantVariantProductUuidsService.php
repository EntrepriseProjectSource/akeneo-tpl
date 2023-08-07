<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Product_Query_GetDescendantVariantProductUuidsService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo.pim.enrichment.product.query.get_descendant_variant_product_uuids' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetDescendantVariantProductUuids
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetDescendantVariantProductUuids.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['akeneo.pim.enrichment.product.query.get_descendant_variant_product_uuids'])) {
            return $container->services['akeneo.pim.enrichment.product.query.get_descendant_variant_product_uuids'];
        }

        return $container->services['akeneo.pim.enrichment.product.query.get_descendant_variant_product_uuids'] = new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetDescendantVariantProductUuids($a);
    }
}
