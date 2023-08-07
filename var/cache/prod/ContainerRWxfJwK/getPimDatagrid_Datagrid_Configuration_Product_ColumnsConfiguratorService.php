<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Datagrid_Configuration_Product_ColumnsConfiguratorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_datagrid.datagrid.configuration.product.columns_configurator' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\ColumnsConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/Product/ColumnsConfigurator.php';

        return $container->privates['pim_datagrid.datagrid.configuration.product.columns_configurator'] = new \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\ColumnsConfigurator(($container->privates['pim_datagrid.datagrid.configuration.product.configuration_registry'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_ConfigurationRegistryService')));
    }
}