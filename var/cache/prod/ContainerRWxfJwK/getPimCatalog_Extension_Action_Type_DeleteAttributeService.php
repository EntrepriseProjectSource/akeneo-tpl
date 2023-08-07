<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Extension_Action_Type_DeleteAttributeService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_catalog.extension.action.type.delete_attribute' service.
     *
     * @return \Oro\Bundle\DataGridBundle\Extension\Action\Actions\DeleteAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/AbstractAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/DataGridBundle/Extension/Action/Actions/DeleteAction.php';

        $container->factories['pim_catalog.extension.action.type.delete_attribute'] = function () use ($container) {
            return new \Oro\Bundle\DataGridBundle\Extension\Action\Actions\DeleteAction();
        };

        return $container->factories['pim_catalog.extension.action.type.delete_attribute']();
    }
}