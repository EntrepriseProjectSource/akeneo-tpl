<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoBatch_MailNotifierService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo_batch.mail_notifier' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchBundle\Notification\MailNotifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Notification/Notifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Notification/MailNotifier.php';

        $a = ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService'));

        if (isset($container->privates['akeneo_batch.mail_notifier'])) {
            return $container->privates['akeneo_batch.mail_notifier'];
        }
        $b = ($container->privates['pim_notification.email.email_notifier'] ?? $container->load('getPimNotification_Email_EmailNotifierService'));

        if (isset($container->privates['akeneo_batch.mail_notifier'])) {
            return $container->privates['akeneo_batch.mail_notifier'];
        }

        return $container->privates['akeneo_batch.mail_notifier'] = new \Akeneo\Tool\Bundle\BatchBundle\Notification\MailNotifier(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a, $b);
    }
}
