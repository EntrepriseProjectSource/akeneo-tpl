<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_EventListener_AssociationProductPickerGridBeforeListenerService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.event_listener.association_product_picker_grid_before_listener' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureProductGridListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/EventListener/ConfigureProductGridListener.php';

        return $container->privates['pim_enrich.event_listener.association_product_picker_grid_before_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureProductGridListener(($container->privates['pim_datagrid.datagrid.configuration.product.context_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_ContextConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.columns_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_ColumnsConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.filters_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_FiltersConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.sorters_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_SortersConfiguratorService')), ($container->privates['pim_datagrid.datagrid.configuration.product.all_attributes_useable_in_grid_configurator'] ?? $container->load('getPimDatagrid_Datagrid_Configuration_Product_AllAttributesUseableInGridConfiguratorService')));
    }
}