<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductsActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Catalogs\Infrastructure\Controller\Public\GetProductsAction' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Controller\Public\GetProductsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Security/GetCurrentUsernameTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Security/DenyAccessUnlessGrantedTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Controller/Public/GetProductsAction.php';

        return $container->services['Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductsAction'] = new \Akeneo\Catalogs\Infrastructure\Controller\Public\GetProductsAction(($container->privates['Akeneo\\Catalogs\\ServiceAPI\\Messenger\\QueryBus'] ?? $container->load('getQueryBusService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
