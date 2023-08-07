<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_EventListener_HistoryGridListenerService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.event_listener.history_grid_listener' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureHistoryGridListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/EventListener/ConfigureHistoryGridListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resolver/FQCNResolver.php';

        return $container->privates['pim_enrich.event_listener.history_grid_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\ConfigureHistoryGridListener(($container->privates['oro_datagrid.datagrid.request_params'] ?? $container->load('getOroDatagrid_Datagrid_RequestParamsService')), ($container->privates['pim_catalog.resolver.fqcn'] ?? ($container->privates['pim_catalog.resolver.fqcn'] = new \Akeneo\Pim\Enrichment\Bundle\Resolver\FQCNResolver($container))));
    }
}