<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_EventSubscriber_Storage_ChannelLocaleService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.event_subscriber.storage.channel_locale' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\EventListener\ChannelLocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/EventListener/ChannelLocaleSubscriber.php';

        $a = ($container->privates['pim_catalog.saver.locale'] ?? $container->load('getPimCatalog_Saver_LocaleService'));

        if (isset($container->privates['pim_enrich.event_subscriber.storage.channel_locale'])) {
            return $container->privates['pim_enrich.event_subscriber.storage.channel_locale'];
        }
        $b = ($container->privates['akeneo_batch_queue.launcher.queue_job_launcher'] ?? $container->load('getAkeneoBatchQueue_Launcher_QueueJobLauncherService'));

        if (isset($container->privates['pim_enrich.event_subscriber.storage.channel_locale'])) {
            return $container->privates['pim_enrich.event_subscriber.storage.channel_locale'];
        }

        return $container->privates['pim_enrich.event_subscriber.storage.channel_locale'] = new \Akeneo\Channel\Infrastructure\EventListener\ChannelLocaleSubscriber(($container->privates['pim_catalog.repository.locale'] ?? $container->getPimCatalog_Repository_LocaleService()), $a, ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $b, ($container->privates['akeneo_batch.job.job_instance_repository'] ?? $container->load('getAkeneoBatch_Job_JobInstanceRepositoryService')), 'remove_completeness_for_channel_and_locale');
    }
}
