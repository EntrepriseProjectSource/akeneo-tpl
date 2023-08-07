<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Updater_ChannelService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.updater.channel' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\Component\Updater\ChannelUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Updater/ObjectUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Component/Updater/ChannelUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/TranslatableUpdater.php';

        return $container->privates['pim_catalog.updater.channel'] = new \Akeneo\Channel\Infrastructure\Component\Updater\ChannelUpdater(($container->privates['pim_catalog.repository.category'] ?? $container->getPimCatalog_Repository_CategoryService()), ($container->privates['pim_catalog.repository.locale'] ?? $container->getPimCatalog_Repository_LocaleService()), ($container->privates['pim_catalog.repository.currency'] ?? $container->load('getPimCatalog_Repository_CurrencyService')), ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), new \Akeneo\Tool\Component\Localization\TranslatableUpdater());
    }
}