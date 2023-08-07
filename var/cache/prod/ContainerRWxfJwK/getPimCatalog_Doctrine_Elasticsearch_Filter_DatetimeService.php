<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Doctrine_Elasticsearch_Filter_DatetimeService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.doctrine.elasticsearch.filter.datetime' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\DateTimeFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FieldFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/AbstractFieldFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/DateTimeFilter.php';

        $a = ($container->privates['akeneo_batch.job.job_instance_repository'] ?? $container->load('getAkeneoBatch_Job_JobInstanceRepositoryService'));

        if (isset($container->privates['pim_catalog.doctrine.elasticsearch.filter.datetime'])) {
            return $container->privates['pim_catalog.doctrine.elasticsearch.filter.datetime'];
        }
        $b = ($container->privates['akeneo_batch.job_repository'] ?? $container->load('getAkeneoBatch_JobRepositoryService'));

        if (isset($container->privates['pim_catalog.doctrine.elasticsearch.filter.datetime'])) {
            return $container->privates['pim_catalog.doctrine.elasticsearch.filter.datetime'];
        }

        return $container->privates['pim_catalog.doctrine.elasticsearch.filter.datetime'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\DateTimeFilter($a, $b, [0 => 'created', 1 => 'updated'], [0 => '=', 1 => '<', 2 => '>', 3 => 'BETWEEN', 4 => 'NOT BETWEEN', 5 => 'EMPTY', 6 => 'NOT EMPTY', 7 => '!=', 8 => 'SINCE LAST N DAYS', 9 => 'SINCE LAST JOB']);
    }
}