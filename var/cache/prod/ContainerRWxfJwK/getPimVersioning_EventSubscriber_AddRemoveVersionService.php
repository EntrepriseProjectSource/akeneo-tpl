<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimVersioning_EventSubscriber_AddRemoveVersionService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_versioning.event_subscriber.add_remove_version' shared service.
     *
     * @return \Akeneo\Tool\Bundle\VersioningBundle\EventSubscriber\AddRemoveVersionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/VersioningBundle/EventSubscriber/AddRemoveVersionSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/SaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/BulkSaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Saver/BaseSaver.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/VersioningBundle/Factory/VersionFactory.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_versioning.event_subscriber.add_remove_version'])) {
            return $container->privates['pim_versioning.event_subscriber.add_remove_version'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pim_versioning.event_subscriber.add_remove_version'])) {
            return $container->privates['pim_versioning.event_subscriber.add_remove_version'];
        }

        return $container->privates['pim_versioning.event_subscriber.add_remove_version'] = new \Akeneo\Tool\Bundle\VersioningBundle\EventSubscriber\AddRemoveVersionSubscriber(($container->privates['pim_versioning.factory.version'] ?? ($container->privates['pim_versioning.factory.version'] = new \Akeneo\Tool\Bundle\VersioningBundle\Factory\VersionFactory('Akeneo\\Tool\\Component\\Versioning\\Model\\Version'))), ($container->privates['pim_versioning.repository.version'] ?? $container->load('getPimVersioning_Repository_VersionService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver($a, $b, 'Akeneo\\Tool\\Component\\Versioning\\Model\\Version'));
    }
}
