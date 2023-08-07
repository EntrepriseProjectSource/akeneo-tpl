<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_EventListener_ProductGroupGridBeforeListenerService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.event_listener.product_group_grid_before_listener' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureProductGridListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/EventListener/ConfigureProductGridListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/Product/ColumnsConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/Product/GroupColumnsConfigurator.php';

        return $container->privates['pim_enrich.event_listener.product_group_grid_before_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureProductGridListener(($container->privates['pim_datagrid.datagrid.configuration.product.context_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_ContextConfiguratorService')), new \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\GroupColumnsConfigurator(($container->privates['pim_datagrid.datagrid.configuration.product.configuration_registry'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_ConfigurationRegistryService')), ($container->privates['oro_datagrid.datagrid.request_params'] ?? $container->load('getOroDatagrid_Datagrid_RequestParamsService')), ($container->privates['pim_catalog.repository.group'] ?? $container->load('getPimCatalog_Repository_GroupService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), ($container->privates['pim_datagrid.datagrid.configuration.product.filters_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_FiltersConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.sorters_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_SortersConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.all_attributes_useable_in_grid_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_AllAttributesUseableInGridConfiguratorService')));
    }
}