<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Controller_InternalApi_CreateMeasurementFamilyService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_api.controller.internal_api.create_measurement_family' shared service.
     *
     * @return \Akeneo\Tool\Bundle\MeasureBundle\Controller\InternalApi\CreateMeasurementFamilyAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MeasureBundle/Controller/InternalApi/CreateMeasurementFamilyAction.php';

        return $container->services['pim_api.controller.internal_api.create_measurement_family'] = new \Akeneo\Tool\Bundle\MeasureBundle\Controller\InternalApi\CreateMeasurementFamilyAction(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')), ($container->privates['akeneo_measure.application.create_measurement_family_handler'] ?? $container->load('getAkeneoMeasure_Application_CreateMeasurementFamilyHandlerService')), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()));
    }
}
