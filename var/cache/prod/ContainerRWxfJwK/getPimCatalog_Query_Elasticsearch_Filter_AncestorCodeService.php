<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Query_Elasticsearch_Filter_AncestorCodeService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.query.elasticsearch.filter.ancestor_code' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\AncestorCodeFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FieldFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/AbstractFieldFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/AncestorCodeFilter.php';

        return $container->privates['pim_catalog.query.elasticsearch.filter.ancestor_code'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\AncestorCodeFilter(($container->privates['pim_catalog.repository.product_model'] ?? $container->load('getPimCatalog_Repository_ProductModelService')), [0 => 'ancestor.code'], [0 => '=', 1 => 'IN', 2 => 'NOT IN']);
    }
}
