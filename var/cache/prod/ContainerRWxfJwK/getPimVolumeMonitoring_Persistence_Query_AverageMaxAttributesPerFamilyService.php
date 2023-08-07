<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimVolumeMonitoring_Persistence_Query_AverageMaxAttributesPerFamilyService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_volume_monitoring.persistence.query.average_max_attributes_per_family' shared service.
     *
     * @return \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Query\Sql\AverageMaxAttributesPerFamily
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Component/CatalogVolumeMonitoring/Volume/Query/AverageMaxQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CatalogVolumeMonitoringBundle/Persistence/Query/Sql/AverageMaxAttributesPerFamily.php';

        return $container->privates['pim_volume_monitoring.persistence.query.average_max_attributes_per_family'] = new \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Query\Sql\AverageMaxAttributesPerFamily(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}