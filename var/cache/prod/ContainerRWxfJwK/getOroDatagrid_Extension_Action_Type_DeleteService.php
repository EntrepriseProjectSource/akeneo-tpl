<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroDatagrid_Extension_Action_Type_DeleteService extends KernelProdContainer
{
    /*
     * Gets the public 'oro_datagrid.extension.action.type.delete' service.
     *
     * @return \Oro\Bundle\DataGridBundle\Extension\Action\Actions\DeleteAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/AbstractAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/DeleteAction.php';

        $container->factories['oro_datagrid.extension.action.type.delete'] = function () use ($container) {
            return new \Oro\Bundle\DataGridBundle\Extension\Action\Actions\DeleteAction();
        };

        return $container->factories['oro_datagrid.extension.action.type.delete']();
    }
}
