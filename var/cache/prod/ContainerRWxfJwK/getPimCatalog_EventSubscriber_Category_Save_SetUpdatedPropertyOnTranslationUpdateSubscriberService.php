<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_EventSubscriber_Category_Save_SetUpdatedPropertyOnTranslationUpdateSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.event_subscriber.category.save.set_updated_property_on_translation_update_subscriber' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Category\OnSave\SetUpdatedPropertyOnTranslationUpdateSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/EventSubscriber/Category/OnSave/SetUpdatedPropertyOnTranslationUpdateSubscriber.php';

        return $container->privates['pim_catalog.event_subscriber.category.save.set_updated_property_on_translation_update_subscriber'] = new \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Category\OnSave\SetUpdatedPropertyOnTranslationUpdateSubscriber();
    }
}
