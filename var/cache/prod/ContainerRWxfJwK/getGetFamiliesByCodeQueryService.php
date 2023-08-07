<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetFamiliesByCodeQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Persistence\Family\GetFamiliesByCodeQuery' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Persistence\Family\GetFamiliesByCodeQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Family/GetFamiliesByCodeQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Family/GetFamiliesByCodeQuery.php';

        $a = ($container->privates['pim_enrich.repository.family.search'] ?? $container->load('getPimEnrich_Repository_Family_SearchService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Family\\GetFamiliesByCodeQuery'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Family\\GetFamiliesByCodeQuery'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Family\\GetFamiliesByCodeQuery'] = new \Akeneo\Catalogs\Infrastructure\Persistence\Family\GetFamiliesByCodeQuery($a);
    }
}