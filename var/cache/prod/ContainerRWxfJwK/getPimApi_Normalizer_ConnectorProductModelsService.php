<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Normalizer_ConnectorProductModelsService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_api.normalizer.connector_product_models' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ConnectorProductModelNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/ExternalApi/ConnectorProductModelNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/Standard/DateTimeNormalizer.php';

        return $container->privates['pim_api.normalizer.connector_product_models'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ConnectorProductModelNormalizer(($container->privates['pim_api.normalizer.values'] ?? $container->load('getPimApi_Normalizer_ValuesService')), ($container->privates['pim_catalog.normalizer.standard.datetime'] ?? ($container->privates['pim_catalog.normalizer.standard.datetime'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\DateTimeNormalizer())));
    }
}
