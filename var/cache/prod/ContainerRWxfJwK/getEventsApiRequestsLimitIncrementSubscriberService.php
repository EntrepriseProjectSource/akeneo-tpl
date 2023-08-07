<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventsApiRequestsLimitIncrementSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitIncrementSubscriber' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitIncrementSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/EventSubscribers/EventsApiRequestsLimitIncrementSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Webhook/Persistence/Query/UpdateEventsApiRequestCountQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/Persistence/DbalUpdateEventsApiRequestCountQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitIncrementSubscriber'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitIncrementSubscriber'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitIncrementSubscriber'] = new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitIncrementSubscriber(new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\Persistence\DbalUpdateEventsApiRequestCountQuery($a));
    }
}
