<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAllTestAppsActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllTestAppsAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllTestAppsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/Controller/Internal/GetAllTestAppsAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Marketplace/GetAllTestAppsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/Persistence/GetAllTestAppsQuery.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetAllTestAppsAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllTestAppsAction(($container->services['akeneo_connectivity.connection.app_developer_mode.feature'] ?? ($container->services['akeneo_connectivity.connection.app_developer_mode.feature'] = new \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag($container->getEnv('bool:FLAG_APP_DEVELOPER_MODE_ENABLED')))), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Marketplace\\AppUrlGenerator'] ?? $container->load('getAppUrlGeneratorService')), new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Persistence\GetAllTestAppsQuery(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())));
    }
}
