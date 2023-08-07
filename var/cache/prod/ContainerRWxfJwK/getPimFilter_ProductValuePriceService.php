<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimFilter_ProductValuePriceService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_filter.product_value_price' shared service.
     *
     * @return \Oro\Bundle\PimFilterBundle\Filter\ProductValue\PriceFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/NumberFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimFilterBundle/Filter/ProductValue/PriceFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Filter/FilterUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimFilterBundle/Filter/ProductFilterUtility.php';

        $a = ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'));

        if (isset($container->privates['pim_filter.product_value_price'])) {
            return $container->privates['pim_filter.product_value_price'];
        }

        return $container->privates['pim_filter.product_value_price'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductValue\PriceFilter($a, ($container->privates['pim_filter.product_utility'] ?? ($container->privates['pim_filter.product_utility'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductFilterUtility())));
    }
}
