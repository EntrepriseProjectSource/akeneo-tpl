<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_EventSubscriber_UpdateExportsOnChannelUpdateService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.event_subscriber.update_exports_on_channel_update' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Category\OnSave\ConfigureCategoryTreeForExportJobsAfterChangingTheChannelCategoryTree
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/EventSubscriber/Category/OnSave/ConfigureCategoryTreeForExportJobsAfterChangingTheChannelCategoryTree.php';

        $a = ($container->privates['akeneo_batch.updater.job_instance'] ?? $container->load('getAkeneoBatch_Updater_JobInstanceService'));

        if (isset($container->privates['pim_catalog.event_subscriber.update_exports_on_channel_update'])) {
            return $container->privates['pim_catalog.event_subscriber.update_exports_on_channel_update'];
        }
        $b = ($container->privates['akeneo_batch.saver.job_instance'] ?? $container->load('getAkeneoBatch_Saver_JobInstanceService'));

        if (isset($container->privates['pim_catalog.event_subscriber.update_exports_on_channel_update'])) {
            return $container->privates['pim_catalog.event_subscriber.update_exports_on_channel_update'];
        }

        return $container->privates['pim_catalog.event_subscriber.update_exports_on_channel_update'] = new \Akeneo\Pim\Enrichment\Bundle\EventSubscriber\Category\OnSave\ConfigureCategoryTreeForExportJobsAfterChangingTheChannelCategoryTree(($container->privates['akeneo_batch.job.job_instance_repository'] ?? $container->load('getAkeneoBatch_Job_JobInstanceRepositoryService')), $a, $b, [0 => 'csv_product_export', 1 => 'xlsx_product_export', 2 => 'csv_product_model_export', 3 => 'xlsx_product_model_export', 4 => 'csv_published_product_export', 5 => 'xlsx_published_product_export', 6 => 'akeneo_shared_catalog']);
    }
}