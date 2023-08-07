<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_EventSubscriber_Product_OnSave_ApiAggregatorEventSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.event_subscriber.product.on_save.api_aggregator_event_subscriber' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Product\OnSave\ApiAggregatorForProductPostSaveEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/EventSubscriber/Product/OnSave/ApiAggregatorForProductPostSaveEventSubscriber.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pim_catalog.event_subscriber.product.on_save.api_aggregator_event_subscriber'])) {
            return $container->privates['pim_catalog.event_subscriber.product.on_save.api_aggregator_event_subscriber'];
        }

        return $container->privates['pim_catalog.event_subscriber.product.on_save.api_aggregator_event_subscriber'] = new \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Product\OnSave\ApiAggregatorForProductPostSaveEventSubscriber($a);
    }
}