<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_EventListener_GroupUsersGridListenerService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_user.event_listener.group_users_grid_listener' shared service.
     *
     * @return \Oro\Bundle\DataGridBundle\EventListener\BaseOrmRelationDatagridListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/EventListener/BaseOrmRelationDatagridListener.php';

        return $container->privates['pim_user.event_listener.group_users_grid_listener'] = new \Oro\Bundle\DataGridBundle\EventListener\BaseOrmRelationDatagridListener('group_id', ($container->privates['oro_datagrid.datagrid.request_params'] ?? $container->load('getOroDatagrid_Datagrid_RequestParamsService')));
    }
}
