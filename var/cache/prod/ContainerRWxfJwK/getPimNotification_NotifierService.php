<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimNotification_NotifierService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_notification.notifier' shared service.
     *
     * @return \Akeneo\Platform\Bundle\NotificationBundle\Notifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/NotificationBundle/NotifierInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/NotificationBundle/Notifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/NotificationBundle/Factory/UserNotificationFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/SaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Saver/BulkSaverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Saver/BaseSaver.php';

        $a = ($container->privates['pim_user.manager'] ?? $container->load('getPimUser_ManagerService'));

        if (isset($container->privates['pim_notification.notifier'])) {
            return $container->privates['pim_notification.notifier'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_notification.notifier'])) {
            return $container->privates['pim_notification.notifier'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pim_notification.notifier'])) {
            return $container->privates['pim_notification.notifier'];
        }

        return $container->privates['pim_notification.notifier'] = new \Akeneo\Platform\Bundle\NotificationBundle\Notifier(new \Akeneo\Platform\Bundle\NotificationBundle\Factory\UserNotificationFactory('Akeneo\\Platform\\Bundle\\NotificationBundle\\Entity\\UserNotification'), $a, new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver($b, $c, 'Akeneo\\Platform\\Bundle\\NotificationBundle\\Entity\\Notification'), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver($b, $c, 'Akeneo\\Platform\\Bundle\\NotificationBundle\\Entity\\UserNotification'));
    }
}