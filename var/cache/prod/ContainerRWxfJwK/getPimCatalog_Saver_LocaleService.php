<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Saver_LocaleService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.saver.locale' shared service.
     *
     * @return \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/SaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/BulkSaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Saver/BaseSaver.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_catalog.saver.locale'])) {
            return $container->privates['pim_catalog.saver.locale'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pim_catalog.saver.locale'])) {
            return $container->privates['pim_catalog.saver.locale'];
        }

        return $container->privates['pim_catalog.saver.locale'] = new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver($a, $b, 'Akeneo\\Channel\\Infrastructure\\Component\\Model\\LocaleInterface');
    }
}
