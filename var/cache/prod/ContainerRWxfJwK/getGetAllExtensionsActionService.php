<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAllExtensionsActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllExtensionsAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllExtensionsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/Controller/Internal/GetAllExtensionsAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Marketplace/GetAllExtensionsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Marketplace/Persistence/GetAllExtensionsQuery.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetAllExtensionsAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Controller\Internal\GetAllExtensionsAction(new \Akeneo\Connectivity\Connection\Infrastructure\Marketplace\Persistence\GetAllExtensionsQuery(($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\WebMarketplaceApi'] ?? $container->load('getWebMarketplaceApiService')), 100, NULL), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Marketplace\\MarketplaceAnalyticsGenerator'] ?? $container->load('getMarketplaceAnalyticsGeneratorService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
