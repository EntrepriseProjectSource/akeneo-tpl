<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectorProductWithUuidNormalizerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ConnectorProductWithUuidNormalizer' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ConnectorProductWithUuidNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/ExternalApi/ConnectorProductWithUuidNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/Standard/DateTimeNormalizer.php';

        $a = ($container->privates['pim_api.normalizer.values'] ?? $container->load('getPimApi_Normalizer_ValuesService'));

        if (isset($container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\ExternalApi\\ConnectorProductWithUuidNormalizer'])) {
            return $container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\ExternalApi\\ConnectorProductWithUuidNormalizer'];
        }

        return $container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\ExternalApi\\ConnectorProductWithUuidNormalizer'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ConnectorProductWithUuidNormalizer($a, ($container->privates['pim_catalog.normalizer.standard.datetime'] ?? ($container->privates['pim_catalog.normalizer.standard.datetime'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\DateTimeNormalizer())));
    }
}