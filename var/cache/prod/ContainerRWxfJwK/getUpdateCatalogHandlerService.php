<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCatalogHandlerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Application\Handler\UpdateCatalogHandler' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Application\Handler\UpdateCatalogHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Handler/UpdateCatalogHandler.php';

        $a = ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\GetCatalogQuery'] ?? $container->load('getGetCatalogQueryService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateCatalogHandler'])) {
            return $container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateCatalogHandler'];
        }
        $b = ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\UpsertCatalogQuery'] ?? $container->load('getUpsertCatalogQueryService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateCatalogHandler'])) {
            return $container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateCatalogHandler'];
        }

        return $container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateCatalogHandler'] = new \Akeneo\Catalogs\Application\Handler\UpdateCatalogHandler($a, $b);
    }
}
