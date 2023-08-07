<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroFilter_DatetimeRangeFilterService extends KernelProdContainer
{
    /*
     * Gets the private 'oro_filter.datetime_range_filter' shared service.
     *
     * @return \Oro\Bundle\FilterBundle\Filter\DateTimeRangeFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/DateTimeRangeFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterUtility.php';

        $a = ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'));

        if (isset($container->privates['oro_filter.datetime_range_filter'])) {
            return $container->privates['oro_filter.datetime_range_filter'];
        }

        return $container->privates['oro_filter.datetime_range_filter'] = new \Oro\Bundle\FilterBundle\Filter\DateTimeRangeFilter($a, ($container->privates['oro_filter.filter_utility'] ?? ($container->privates['oro_filter.filter_utility'] = new \Oro\Bundle\FilterBundle\Filter\FilterUtility())));
    }
}
