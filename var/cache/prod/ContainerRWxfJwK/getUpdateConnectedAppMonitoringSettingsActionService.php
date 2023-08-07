<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateConnectedAppMonitoringSettingsActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\UpdateConnectedAppMonitoringSettingsAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\UpdateConnectedAppMonitoringSettingsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Controller/Internal/UpdateConnectedAppMonitoringSettingsAction.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\UpdateConnectedAppMonitoringSettingsAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\UpdateConnectedAppMonitoringSettingsAction(($container->services['akeneo_connectivity.connection.marketplace_activate.feature'] ?? ($container->services['akeneo_connectivity.connection.marketplace_activate.feature'] = new \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag($container->getEnv('bool:FLAG_MARKETPLACE_ACTIVATE_ENABLED')))), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Settings\\Query\\FindAConnectionHandler'] ?? $container->load('getFindAConnectionHandlerService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Settings\\Command\\UpdateConnectionHandler'] ?? $container->load('getUpdateConnectionHandlerService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Persistence\\FindOneConnectedAppByConnectionCodeQuery'] ?? $container->load('getFindOneConnectedAppByConnectionCodeQueryService')));
    }
}
