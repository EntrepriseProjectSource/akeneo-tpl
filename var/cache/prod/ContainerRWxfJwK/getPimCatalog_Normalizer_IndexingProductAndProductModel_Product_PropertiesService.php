<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Normalizer_IndexingProductAndProductModel_Product_PropertiesService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.normalizer.indexing_product_and_product_model.product.properties' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\ProductAndProductModel\ProductPropertiesNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['pim_catalog.normalizer.indexing_product_and_product_model.product.properties'] = $container->createProxy('ProductPropertiesNormalizer_2dd83b2', function () use ($container) {
                return \ProductPropertiesNormalizer_2dd83b2::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/Indexing/ProductAndProductModel/ProductPropertiesNormalizer.php';

        return new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\ProductAndProductModel\ProductPropertiesNormalizer(($container->services['pim_catalog.repository.channel'] ?? $container->getPimCatalog_Repository_ChannelService()), ($container->privates['pim_catalog.repository.locale'] ?? $container->getPimCatalog_Repository_LocaleService()), ($container->privates['akeneo.pim.enrichment.product.query.get_product_completenesses'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_GetProductCompletenessesService')), ($container->privates['pim_indexing_serializer'] ?? $container->load('getPimIndexingSerializerService')), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
