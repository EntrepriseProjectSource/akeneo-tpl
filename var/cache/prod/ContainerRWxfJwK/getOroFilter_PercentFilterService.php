<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroFilter_PercentFilterService extends KernelProdContainer
{
    /*
     * Gets the private 'oro_filter.percent_filter' shared service.
     *
     * @return \Oro\Bundle\FilterBundle\Filter\PercentFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/NumberFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/PercentFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterUtility.php';

        $a = ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'));

        if (isset($container->privates['oro_filter.percent_filter'])) {
            return $container->privates['oro_filter.percent_filter'];
        }

        return $container->privates['oro_filter.percent_filter'] = new \Oro\Bundle\FilterBundle\Filter\PercentFilter($a, ($container->privates['oro_filter.filter_utility'] ?? ($container->privates['oro_filter.filter_utility'] = new \Oro\Bundle\FilterBundle\Filter\FilterUtility())));
    }
}
