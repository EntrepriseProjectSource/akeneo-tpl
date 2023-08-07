<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_EventSubscriber_FilterEntityWithValuesSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_datagrid.event_subscriber.filter_entity_with_values_subscriber' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\EventSubscriber\FilterEntityWithValuesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/EventSubscriber/FilterEntityWithValuesSubscriber.php';

        return $container->privates['pim_datagrid.event_subscriber.filter_entity_with_values_subscriber'] = new \Oro\Bundle\PimDataGridBundle\EventSubscriber\FilterEntityWithValuesSubscriber();
    }
}