<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventsApiRequestsLimitEventSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitEventSubscriber' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/EventSubscribers/EventsApiRequestsLimitEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/Service/GetDelayUntilNextRequest.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Webhook/Persistence/Query/SelectEventsApiRequestCountWithinLastHourQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/Persistence/DbalSelectEventsApiRequestCountWithinLastHourQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Webhook/Service/Sleep.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Webhook/Service/Logger/ReachRequestLimitLogger.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitEventSubscriber'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitEventSubscriber'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventSubscribers\\EventsApiRequestsLimitEventSubscriber'] = new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\EventSubscribers\EventsApiRequestsLimitEventSubscriber(new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\Service\GetDelayUntilNextRequest(new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\Persistence\DbalSelectEventsApiRequestCountWithinLastHourQuery($a)), 4000, new \Akeneo\Connectivity\Connection\Infrastructure\Webhook\Service\Sleep(), new \Akeneo\Connectivity\Connection\Application\Webhook\Service\Logger\ReachRequestLimitLogger(($container->services['monolog.logger.event_api'] ?? $container->load('getMonolog_Logger_EventApiService'))), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Webhook\\Service\\EventsApiDebugLogger'] ?? $container->load('getEventsApiDebugLoggerService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventsApiDebug\\Persistence\\ElasticsearchEventsApiDebugRepository'] ?? $container->load('getElasticsearchEventsApiDebugRepositoryService')));
    }
}