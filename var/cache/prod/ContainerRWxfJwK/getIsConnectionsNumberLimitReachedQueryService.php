<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIsConnectionsNumberLimitReachedQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Settings\Persistence\IsConnectionsNumberLimitReachedQuery' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Settings\Persistence\IsConnectionsNumberLimitReachedQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Settings/Persistence/Query/IsConnectionsNumberLimitReachedQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Settings/Persistence/IsConnectionsNumberLimitReachedQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Connections/Service/GetConnectionsNumberLimit.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\IsConnectionsNumberLimitReachedQuery'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\IsConnectionsNumberLimitReachedQuery'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\IsConnectionsNumberLimitReachedQuery'] = new \Akeneo\Connectivity\Connection\Infrastructure\Settings\Persistence\IsConnectionsNumberLimitReachedQuery($a, new \Akeneo\Connectivity\Connection\Infrastructure\Connections\Service\GetConnectionsNumberLimit(50));
    }
}