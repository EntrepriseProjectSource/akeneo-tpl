<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Comparator_Filter_ProductModelService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.comparator.filter.product_model' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Comparator\Filter\EntityWithValuesFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Comparator/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Comparator/Filter/EntityWithValuesFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Comparator/Filter/EntityWithValuesFieldFilter.php';

        $a = ($container->privates['pim_catalog.normalizer.standard.product_model'] ?? $container->load('getPimCatalog_Normalizer_Standard_ProductModelService'));
        $b = ($container->privates['pim_catalog.comparator.registry'] ?? $container->load('getPimCatalog_Comparator_RegistryService'));

        return $container->privates['pim_catalog.comparator.filter.product_model'] = new \Akeneo\Pim\Enrichment\Component\Product\Comparator\Filter\EntityWithValuesFilter($a, $b, ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), new \Akeneo\Pim\Enrichment\Component\Product\Comparator\Filter\EntityWithValuesFieldFilter($a, $b, [0 => 'family_variant', 1 => 'categories', 2 => 'parent']), [0 => 'family_variant', 1 => 'categories', 2 => 'parent']);
    }
}