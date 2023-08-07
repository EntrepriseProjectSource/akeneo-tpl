<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetChannelLocalesQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Persistence\Locale\GetChannelLocalesQuery' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Persistence\Locale\GetChannelLocalesQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Application/Persistence/Locale/GetChannelLocalesQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Persistence/Locale/GetChannelLocalesQuery.php';

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Locale\\GetChannelLocalesQuery'] = new \Akeneo\Catalogs\Infrastructure\Persistence\Locale\GetChannelLocalesQuery(($container->services['pim_catalog.repository.channel'] ?? $container->getPimCatalog_Repository_ChannelService()));
    }
}