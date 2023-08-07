<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Converter_EnrichToStandard_ProductValueService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.converter.enrich_to_standard.product_value' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Converter\InternalApiToStandard\ValueConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Converter/ConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Converter/InternalApiToStandard/ValueConverter.php';

        return $container->privates['pim_enrich.converter.enrich_to_standard.product_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Converter\InternalApiToStandard\ValueConverter(($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')));
    }
}