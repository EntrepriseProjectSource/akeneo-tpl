<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectedPimUserProviderService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Apps\Security\ConnectedPimUserProvider' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Apps\Security\ConnectedPimUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/ConnectedPimUserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Security/ConnectedPimUserProvider.php';

        return $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Security\\ConnectedPimUserProvider'] = new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Security\ConnectedPimUserProvider(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
