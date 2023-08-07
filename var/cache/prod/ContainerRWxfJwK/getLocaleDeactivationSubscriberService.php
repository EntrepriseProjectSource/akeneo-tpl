<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaleDeactivationSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\EventSubscriber\LocaleDeactivationSubscriber' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\EventSubscriber\LocaleDeactivationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/EventSubscriber/LocaleDeactivationSubscriber.php';

        $a = ($container->privates['akeneo_batch_queue.launcher.queue_job_launcher'] ?? $container->load('getAkeneoBatchQueue_Launcher_QueueJobLauncherService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\LocaleDeactivationSubscriber'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\LocaleDeactivationSubscriber'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\LocaleDeactivationSubscriber'] = new \Akeneo\Catalogs\Infrastructure\EventSubscriber\LocaleDeactivationSubscriber(($container->privates['akeneo_batch.job.job_instance_repository'] ?? $container->load('getAkeneoBatch_Job_JobInstanceRepositoryService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a);
    }
}
