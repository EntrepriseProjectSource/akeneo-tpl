<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Query_Elasticsearch_Filter_OptionService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.query.elasticsearch.filter.option' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Attribute\OptionFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/AttributeFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Attribute/AbstractAttributeFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Attribute/OptionFilter.php';

        $a = ($container->privates['pim_catalog.repository.attribute_option'] ?? $container->load('getPimCatalog_Repository_AttributeOptionService'));

        if (isset($container->privates['pim_catalog.query.elasticsearch.filter.option'])) {
            return $container->privates['pim_catalog.query.elasticsearch.filter.option'];
        }

        return $container->privates['pim_catalog.query.elasticsearch.filter.option'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Attribute\OptionFilter(($container->privates['pim_catalog.validator.helper.attribute_filter'] ?? $container->load('getPimCatalog_Validator_Helper_AttributeFilterService')), $a, [0 => 'pim_catalog_simpleselect', 1 => 'pim_catalog_multiselect'], [0 => 'IN', 1 => 'EMPTY', 2 => 'NOT EMPTY', 3 => 'NOT IN']);
    }
}
