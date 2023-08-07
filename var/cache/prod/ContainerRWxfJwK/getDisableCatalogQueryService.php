<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisableCatalogQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Persistence\Catalog\DisableCatalogQuery' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Persistence\Catalog\DisableCatalogQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Catalog/DisableCatalogQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Catalog/DisableCatalogQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\DisableCatalogQuery'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\DisableCatalogQuery'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\DisableCatalogQuery'] = new \Akeneo\Catalogs\Infrastructure\Persistence\Catalog\DisableCatalogQuery($a);
    }
}
