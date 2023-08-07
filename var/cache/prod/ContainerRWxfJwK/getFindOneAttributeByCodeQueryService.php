<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFindOneAttributeByCodeQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Persistence\Attribute\FindOneAttributeByCodeQuery' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Persistence\Attribute\FindOneAttributeByCodeQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Attribute/FindOneAttributeByCodeQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Attribute/FindOneAttributeByCodeQuery.php';

        $a = ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Attribute\\FindOneAttributeByCodeQuery'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Attribute\\FindOneAttributeByCodeQuery'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Attribute\\FindOneAttributeByCodeQuery'] = new \Akeneo\Catalogs\Infrastructure\Persistence\Attribute\FindOneAttributeByCodeQuery($a);
    }
}
