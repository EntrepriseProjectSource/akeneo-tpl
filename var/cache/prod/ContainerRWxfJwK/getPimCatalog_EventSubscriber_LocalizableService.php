<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_EventSubscriber_LocalizableService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.event_subscriber.localizable' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\AttributeOption\LocalizableSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/EventSubscriber/AttributeOption/LocalizableSubscriber.php';

        return $container->privates['pim_catalog.event_subscriber.localizable'] = new \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\AttributeOption\LocalizableSubscriber(($container->privates['pim_catalog.context.catalog'] ?? ($container->privates['pim_catalog.context.catalog'] = new \Akeneo\Pim\Enrichment\Bundle\Context\CatalogContext())));
    }
}