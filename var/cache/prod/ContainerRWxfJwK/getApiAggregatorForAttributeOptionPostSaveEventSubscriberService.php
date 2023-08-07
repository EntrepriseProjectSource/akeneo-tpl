<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiAggregatorForAttributeOptionPostSaveEventSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Structure\Bundle\EventSubscriber\ApiAggregatorForAttributeOptionPostSaveEventSubscriber' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\EventSubscriber\ApiAggregatorForAttributeOptionPostSaveEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/EventSubscriber/ApiAggregatorForAttributeOptionPostSaveEventSubscriber.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['Akeneo\\Pim\\Structure\\Bundle\\EventSubscriber\\ApiAggregatorForAttributeOptionPostSaveEventSubscriber'])) {
            return $container->privates['Akeneo\\Pim\\Structure\\Bundle\\EventSubscriber\\ApiAggregatorForAttributeOptionPostSaveEventSubscriber'];
        }

        return $container->privates['Akeneo\\Pim\\Structure\\Bundle\\EventSubscriber\\ApiAggregatorForAttributeOptionPostSaveEventSubscriber'] = new \Akeneo\Pim\Structure\Bundle\EventSubscriber\ApiAggregatorForAttributeOptionPostSaveEventSubscriber($a);
    }
}