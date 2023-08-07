<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Extension_Action_Type_TabRedirectService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_datagrid.extension.action.type.tab_redirect' service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Extension\Action\Actions\TabRedirectAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/AbstractAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Extension/Action/Actions/TabRedirectAction.php';

        $container->factories['pim_datagrid.extension.action.type.tab_redirect'] = function () use ($container) {
            return new \Oro\Bundle\PimDataGridBundle\Extension\Action\Actions\TabRedirectAction();
        };

        return $container->factories['pim_datagrid.extension.action.type.tab_redirect']();
    }
}
