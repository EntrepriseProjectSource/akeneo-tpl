<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Datagrid_Configuration_Product_ConfigurationRegistryService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_datagrid.datagrid.configuration.product.configuration_registry' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\ConfigurationRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Configuration/Product/ConfigurationRegistry.php';

        $container->privates['pim_datagrid.datagrid.configuration.product.configuration_registry'] = $instance = new \Oro\Bundle\PimDataGridBundle\Datagrid\Configuration\Product\ConfigurationRegistry();

        $instance->setConfigurations(['pim_catalog_identifier' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_identifier'], 'pim_catalog_text' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_text'], 'pim_catalog_textarea' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_text'], 'pim_catalog_simpleselect' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_simpleselect'], 'pim_catalog_multiselect' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_multiselect'], 'pim_catalog_number' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_number'], 'pim_catalog_boolean' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_boolean'], 'pim_catalog_date' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_date'], 'pim_catalog_file' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_file'], 'pim_catalog_image' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_image'], 'pim_catalog_price_collection' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_price_collection'], 'pim_catalog_metric' => $container->parameters['pim_datagrid.product.attribute_type.pim_catalog_metric'], 'pim_reference_data_simpleselect' => $container->parameters['pim_datagrid.product.attribute_type.pim_reference_data_simpleselect'], 'pim_reference_data_multiselect' => $container->parameters['pim_datagrid.product.attribute_type.pim_reference_data_multiselect']]);

        return $instance;
    }
}
