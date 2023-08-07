<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetConnectedAppMonitoringSettingsActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\GetConnectedAppMonitoringSettingsAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\GetConnectedAppMonitoringSettingsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Controller/Internal/GetConnectedAppMonitoringSettingsAction.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetConnectedAppMonitoringSettingsAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\GetConnectedAppMonitoringSettingsAction(($container->services['akeneo_connectivity.connection.marketplace_activate.feature'] ?? ($container->services['akeneo_connectivity.connection.marketplace_activate.feature'] = new \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag($container->getEnv('bool:FLAG_MARKETPLACE_ACTIVATE_ENABLED')))), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Settings\\Query\\FindAConnectionHandler'] ?? $container->load('getFindAConnectionHandlerService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Persistence\\FindOneConnectedAppByConnectionCodeQuery'] ?? $container->load('getFindOneConnectedAppByConnectionCodeQueryService')));
    }
}