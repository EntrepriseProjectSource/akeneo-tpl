<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Normalizer_IndexingProduct_Product_ProductValueCollectionService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.normalizer.indexing_product.product.product_value_collection' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\Value\ValueCollectionNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['pim_catalog.normalizer.indexing_product.product.product_value_collection'] = $container->createProxy('ValueCollectionNormalizer_725de7c', function () use ($container) {
                return \ValueCollectionNormalizer_725de7c::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/Indexing/Value/ValueCollectionNormalizer.php';

        return new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\Value\ValueCollectionNormalizer(($container->privates['pim_indexing_serializer'] ?? $container->load('getPimIndexingSerializerService')));
    }
}
