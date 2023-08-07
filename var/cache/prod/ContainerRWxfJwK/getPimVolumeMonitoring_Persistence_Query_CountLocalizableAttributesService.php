<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimVolumeMonitoring_Persistence_Query_CountLocalizableAttributesService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_volume_monitoring.persistence.query.count_localizable_attributes' shared service.
     *
     * @return \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Query\Sql\CountLocalizableAttributes
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Component/CatalogVolumeMonitoring/Volume/Query/CountQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CatalogVolumeMonitoringBundle/Persistence/Query/Sql/CountLocalizableAttributes.php';

        return $container->privates['pim_volume_monitoring.persistence.query.count_localizable_attributes'] = new \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Query\Sql\CountLocalizableAttributes(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}