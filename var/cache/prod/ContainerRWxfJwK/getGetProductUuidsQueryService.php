<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductUuidsQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Persistence\Catalog\Product\GetProductUuidsQuery' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Persistence\Catalog\Product\GetProductUuidsQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Catalog/Product/GetProductUuidsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Catalog/Product/GetProductUuidsQuery.php';

        $a = ($container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductQueryBuilderFactoryInterface'] ?? $container->load('getProductQueryBuilderFactoryInterfaceService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\Product\\GetProductUuidsQuery'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\Product\\GetProductUuidsQuery'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Catalog\\Product\\GetProductUuidsQuery'] = new \Akeneo\Catalogs\Infrastructure\Persistence\Catalog\Product\GetProductUuidsQuery($a);
    }
}