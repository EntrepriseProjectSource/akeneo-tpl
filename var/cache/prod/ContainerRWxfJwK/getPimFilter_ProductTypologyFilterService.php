<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimFilter_ProductTypologyFilterService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_filter.product_typology_filter' shared service.
     *
     * @return \Oro\Bundle\PimFilterBundle\Filter\Product\ProductTypologyFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/ChoiceFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimFilterBundle/Filter/Product/ProductTypologyFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimFilterBundle/Filter/ProductFilterUtility.php';

        $a = ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'));

        if (isset($container->privates['pim_filter.product_typology_filter'])) {
            return $container->privates['pim_filter.product_typology_filter'];
        }

        return $container->privates['pim_filter.product_typology_filter'] = new \Oro\Bundle\PimFilterBundle\Filter\Product\ProductTypologyFilter($a, ($container->privates['pim_filter.product_utility'] ?? ($container->privates['pim_filter.product_utility'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductFilterUtility())));
    }
}
