<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetWebMarketplaceUrlActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetWebMarketplaceUrlAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetWebMarketplaceUrlAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/Controller/Internal/GetWebMarketplaceUrlAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Marketplace/MarketplaceUrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Marketplace/MarketplaceUrlGenerator.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetWebMarketplaceUrlAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetWebMarketplaceUrlAction(new \Akeneo\Connectivity\Connection\Application\Marketplace\MarketplaceUrlGenerator('https://apps.akeneo.com', ($container->services['pim_catalog.version_provider'] ?? $container->load('getPimCatalog_VersionProviderService')), $container->getEnv('AKENEO_PIM_URL'), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Persistence\\GetUserProfileQuery'] ?? $container->load('getGetUserProfileQueryService'))), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()));
    }
}