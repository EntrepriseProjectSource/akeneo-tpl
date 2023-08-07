<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Datagrid_Configuration_Product_AllAttributesUseableInGridConfiguratorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_datagrid.datagrid.configuration.product.all_attributes_useable_in_grid_configurator' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\AllAttributesUseableInGridConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/Product/AllAttributesUseableInGridConfigurator.php';

        return $container->privates['pim_datagrid.datagrid.configuration.product.all_attributes_useable_in_grid_configurator'] = new \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\AllAttributesUseableInGridConfigurator(($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ($container->privates['oro_datagrid.datagrid.request_params'] ?? $container->load('getOroDatagrid_Datagrid_RequestParamsService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}