<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Controller_DatagridService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_datagrid.controller.datagrid' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Controller\DatagridController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Controller/DatagridController.php';

        return $container->services['pim_datagrid.controller.datagrid'] = new \Oro\Bundle\PimDataGridBundle\Controller\DatagridController(($container->privates['oro_datagrid.datagrid.metadata_parser'] ?? $container->load('getOroDatagrid_Datagrid_MetadataParserService')));
    }
}