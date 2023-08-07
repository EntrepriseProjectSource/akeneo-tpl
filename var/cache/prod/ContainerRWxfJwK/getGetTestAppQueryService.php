<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetTestAppQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Marketplace\TestApps\Persistence\GetTestAppQuery' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\TestApps\Persistence\GetTestAppQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Marketplace/TestApps/Persistence/GetTestAppQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/TestApps/Persistence/GetTestAppQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Persistence\\GetTestAppQuery'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Persistence\\GetTestAppQuery'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Persistence\\GetTestAppQuery'] = new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\TestApps\Persistence\GetTestAppQuery($a);
    }
}
