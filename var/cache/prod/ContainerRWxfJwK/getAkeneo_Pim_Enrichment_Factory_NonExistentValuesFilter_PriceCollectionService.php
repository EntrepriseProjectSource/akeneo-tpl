<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Factory_NonExistentValuesFilter_PriceCollectionService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.factory.non_existent_values_filter.price_collection' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\NonExistentPriceCollectionValueFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/NonExistentValuesFilter/NonExistentValuesFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/NonExistentValuesFilter/NonExistentPriceCollectionValueFilter.php';

        return $container->privates['akeneo.pim.enrichment.factory.non_existent_values_filter.price_collection'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\NonExistentPriceCollectionValueFilter(($container->privates['pim_catalog.query.find_activated_currencies'] ?? $container->load('getPimCatalog_Query_FindActivatedCurrenciesService')));
    }
}