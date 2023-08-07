<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetConnectionActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Connections\Controller\Internal\GetConnectionAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Connections\Controller\Internal\GetConnectionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Connections/Controller/Internal/GetConnectionAction.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\GetConnectionAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Connections\Controller\Internal\GetConnectionAction(($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Settings\\Query\\FindAConnectionHandler'] ?? $container->load('getFindAConnectionHandlerService')), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()));
    }
}