<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAllCatalogsByOwnerActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Catalogs\Infrastructure\Controller\Internal\GetAllCatalogsByOwnerAction' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Controller\Internal\GetAllCatalogsByOwnerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Controller/Internal/GetAllCatalogsByOwnerAction.php';

        return $container->services['Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetAllCatalogsByOwnerAction'] = new \Akeneo\Catalogs\Infrastructure\Controller\Internal\GetAllCatalogsByOwnerAction(($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\GetCatalogsByOwnerUsernameQuery'] ?? $container->load('getGetCatalogsByOwnerUsernameQueryService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
