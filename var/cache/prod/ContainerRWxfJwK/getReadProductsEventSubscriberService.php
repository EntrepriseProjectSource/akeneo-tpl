<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReadProductsEventSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Audit\EventSubscriber\ReadProductsEventSubscriber' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Audit\EventSubscriber\ReadProductsEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Audit/EventSubscriber/ReadProductsEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Audit/Command/UpdateDataDestinationProductEventCountHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Audit/Persistence/UpsertEventCountQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Audit/Persistence/DbalUpsertEventCountQuery.php';

        $a = ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\ConnectionContext'] ?? $container->load('getConnectionContextService'));

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'];
        }
        $c = ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\DbalConnectionRepository'] ?? $container->load('getDbalConnectionRepositoryService'));

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\EventSubscriber\\ReadProductsEventSubscriber'] = new \Akeneo\Connectivity\Connection\Infrastructure\Audit\EventSubscriber\ReadProductsEventSubscriber($a, new \Akeneo\Connectivity\Connection\Application\Audit\Command\UpdateDataDestinationProductEventCountHandler(new \Akeneo\Connectivity\Connection\Infrastructure\Audit\Persistence\DbalUpsertEventCountQuery($b)), $c);
    }
}
