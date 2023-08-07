<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Extension_MassAction_Type_ExportService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_datagrid.extension.mass_action.type.export' service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Extension\MassAction\Actions\Export\ExportMassAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/AbstractAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/MassAction/Actions/MassActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/MassAction/Actions/Widget/WidgetMassAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Extension/MassAction/Actions/Export/ExportMassActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Extension/MassAction/Actions/Export/ExportMassAction.php';

        $container->factories['pim_datagrid.extension.mass_action.type.export'] = function () use ($container) {
            return new \Oro\Bundle\PimDataGridBundle\Extension\MassAction\Actions\Export\ExportMassAction();
        };

        return $container->factories['pim_datagrid.extension.mass_action.type.export']();
    }
}