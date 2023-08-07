<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyDeactivationSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\EventSubscriber\CurrencyDeactivationSubscriber' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\EventSubscriber\CurrencyDeactivationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/EventSubscriber/CurrencyDeactivationSubscriber.php';

        $a = ($container->privates['akeneo_batch_queue.launcher.queue_job_launcher'] ?? $container->load('getAkeneoBatchQueue_Launcher_QueueJobLauncherService'));

        if (isset($container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\CurrencyDeactivationSubscriber'])) {
            return $container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\CurrencyDeactivationSubscriber'];
        }

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\EventSubscriber\\CurrencyDeactivationSubscriber'] = new \Akeneo\Catalogs\Infrastructure\EventSubscriber\CurrencyDeactivationSubscriber(($container->privates['akeneo_batch.job.job_instance_repository'] ?? $container->load('getAkeneoBatch_Job_JobInstanceRepositoryService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a);
    }
}
