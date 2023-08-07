<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Factory_NonExistentValuesFilter_ReferenceDataSimpleSelectService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.factory.non_existent_values_filter.reference_data_simple_select' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\NonExistentReferenceDataSimpleSelectValuesFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/NonExistentValuesFilter/NonExistentValuesFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/NonExistentValuesFilter/NonExistentReferenceDataSimpleSelectValuesFilter.php';

        return $container->privates['akeneo.pim.enrichment.factory.non_existent_values_filter.reference_data_simple_select'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\NonExistentReferenceDataSimpleSelectValuesFilter(($container->privates['akeneo.pim.enrichment.product.query.get_existing_reference_data_codes'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_GetExistingReferenceDataCodesService')));
    }
}