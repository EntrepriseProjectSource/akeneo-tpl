<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimVolumeMonitoring_Volume_AggregationService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_volume_monitoring.volume.aggregation' shared service.
     *
     * @return \Akeneo\Platform\Component\CatalogVolumeMonitoring\Volume\Service\VolumeAggregation
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Component/CatalogVolumeMonitoring/Volume/Service/VolumeAggregation.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Component/CatalogVolumeMonitoring/Volume/Repository/AggregatedVolumeRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CatalogVolumeMonitoringBundle/Persistence/Repository/Sql/AggregatedVolumeRepository.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['pim_volume_monitoring.volume.aggregation'])) {
            return $container->privates['pim_volume_monitoring.volume.aggregation'];
        }

        return $container->privates['pim_volume_monitoring.volume.aggregation'] = new \Akeneo\Platform\Component\CatalogVolumeMonitoring\Volume\Service\VolumeAggregation(new \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Repository\Sql\AggregatedVolumeRepository($a), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['pim_volume_monitoring.persistence.query.count_products'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_CountProductsService'));
            yield 1 => ($container->privates['pim_volume_monitoring.persistence.query.count_product_models'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_CountProductModelsService'));
            yield 2 => ($container->privates['pim_volume_monitoring.persistence.query.count_product_values'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_CountProductValuesService'));
            yield 3 => ($container->privates['pim_volume_monitoring.persistence.query.count_product_model_values'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_CountProductModelValuesService'));
        }, 4), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['pim_volume_monitoring.persistence.query.average_max_options_per_attribute'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_AverageMaxOptionsPerAttributeService'));
            yield 1 => ($container->privates['pim_volume_monitoring.persistence.query.average_max_product_values'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_AverageMaxProductValuesService'));
            yield 2 => ($container->privates['pim_volume_monitoring.persistence.query.average_max_product_model_values'] ?? $container->load('getPimVolumeMonitoring_Persistence_Query_AverageMaxProductModelValuesService'));
        }, 3), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}