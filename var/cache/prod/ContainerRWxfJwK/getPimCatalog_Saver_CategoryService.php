<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Saver_CategoryService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.saver.category' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Doctrine\Common\Saver\CategorySaver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/SaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/BulkSaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/Common/Saver/CategorySaver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/LockFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/PersistingStoreInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/BlockingStoreInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/RetryTillSaveStore.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/DatabaseTableTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/ExpiringStoreTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/PdoStore.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_catalog.saver.category'])) {
            return $container->privates['pim_catalog.saver.category'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pim_catalog.saver.category'])) {
            return $container->privates['pim_catalog.saver.category'];
        }
        $c = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['pim_catalog.saver.category'])) {
            return $container->privates['pim_catalog.saver.category'];
        }

        return $container->privates['pim_catalog.saver.category'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\Common\Saver\CategorySaver($a, $b, new \Symfony\Component\Lock\LockFactory(new \Symfony\Component\Lock\Store\RetryTillSaveStore(new \Symfony\Component\Lock\Store\PdoStore($c), 100, 50)));
    }
}