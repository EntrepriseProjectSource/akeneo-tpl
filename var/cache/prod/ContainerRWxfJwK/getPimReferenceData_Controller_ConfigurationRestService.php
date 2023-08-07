<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimReferenceData_Controller_ConfigurationRestService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_reference_data.controller.configuration_rest' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\ReferenceDataConfigurationRestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Controller/InternalApi/ReferenceDataConfigurationRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/ReferenceData/ConfigurationRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/ReferenceData/ConfigurationRegistry.php';

        return $container->services['pim_reference_data.controller.configuration_rest'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\ReferenceDataConfigurationRestController(($container->privates['pim_reference_data.registry'] ?? ($container->privates['pim_reference_data.registry'] = new \Akeneo\Pim\Structure\Component\ReferenceData\ConfigurationRegistry())), ($container->privates['pim_internal_api_serializer'] ?? $container->load('getPimInternalApiSerializerService')));
    }
}