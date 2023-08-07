<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_InternalApi_DeleteMeasurementFamilyService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.internal_api.delete_measurement_family' shared service.
     *
     * @return \Akeneo\Tool\Bundle\MeasureBundle\Controller\InternalApi\DeleteMeasurementFamilyAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MeasureBundle/Controller/InternalApi/DeleteMeasurementFamilyAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MeasureBundle/Application/DeleteMeasurementFamily/DeleteMeasurementFamilyHandler.php';

        return $container->services['pim_api.controller.internal_api.delete_measurement_family'] = new \Akeneo\Tool\Bundle\MeasureBundle\Controller\InternalApi\DeleteMeasurementFamilyAction(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), new \Akeneo\Tool\Bundle\MeasureBundle\Application\DeleteMeasurementFamily\DeleteMeasurementFamilyHandler(($container->privates['akeneo_measure.persistence.measurement_family_repository'] ?? $container->load('getAkeneoMeasure_Persistence_MeasurementFamilyRepositoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()));
    }
}
