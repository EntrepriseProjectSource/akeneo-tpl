<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCatalogsByOwnerUsernameHandlerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Application\Handler\GetCatalogsByOwnerUsernameHandler' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Application\Handler\GetCatalogsByOwnerUsernameHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Handler/GetCatalogsByOwnerUsernameHandler.php';

        $a = ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\GetCatalogsByOwnerUsernameQuery'] ?? $container->load('getGetCatalogsByOwnerUsernameQueryService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Application\\Handler\\GetCatalogsByOwnerUsernameHandler'])) {
            return $container->privates['Akeneo\\Catalogs\\Application\\Handler\\GetCatalogsByOwnerUsernameHandler'];
        }

        return $container->privates['Akeneo\\Catalogs\\Application\\Handler\\GetCatalogsByOwnerUsernameHandler'] = new \Akeneo\Catalogs\Application\Handler\GetCatalogsByOwnerUsernameHandler($a);
    }
}
