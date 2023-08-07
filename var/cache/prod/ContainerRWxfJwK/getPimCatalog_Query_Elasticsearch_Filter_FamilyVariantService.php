<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Query_Elasticsearch_Filter_FamilyVariantService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.query.elasticsearch.filter.family_variant' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\FamilyVariantFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FieldFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/AbstractFieldFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/FamilyVariantFilter.php';

        $a = ($container->privates['pim_catalog.repository.family_variant'] ?? $container->load('getPimCatalog_Repository_FamilyVariantService'));

        if (isset($container->privates['pim_catalog.query.elasticsearch.filter.family_variant'])) {
            return $container->privates['pim_catalog.query.elasticsearch.filter.family_variant'];
        }

        return $container->privates['pim_catalog.query.elasticsearch.filter.family_variant'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\FamilyVariantFilter($a, [0 => 'family_variant'], [0 => 'IN', 1 => 'NOT IN', 2 => 'EMPTY', 3 => 'NOT EMPTY']);
    }
}