<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCategoryChildrenActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Catalogs\Infrastructure\Controller\Internal\GetCategoryChildrenAction' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Controller\Internal\GetCategoryChildrenAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Controller/Internal/GetCategoryChildrenAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Category/GetCategoryChildrenQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Category/GetCategoryChildrenQuery.php';

        return $container->services['Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCategoryChildrenAction'] = new \Akeneo\Catalogs\Infrastructure\Controller\Internal\GetCategoryChildrenAction(new \Akeneo\Catalogs\Infrastructure\Persistence\Category\GetCategoryChildrenQuery(($container->privates['pim_catalog.repository.category'] ?? $container->getPimCatalog_Repository_CategoryService())));
    }
}
