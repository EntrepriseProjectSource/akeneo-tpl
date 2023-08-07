<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUi_Controller_AjaxOptionService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_ui.controller.ajax_option' shared service.
     *
     * @return \Akeneo\Platform\Bundle\UIBundle\Controller\AjaxOptionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Controller/AjaxOptionController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/ReferenceData/ConfigurationRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/ReferenceData/ConfigurationRegistry.php';

        return $container->services['pim_ui.controller.ajax_option'] = new \Akeneo\Platform\Bundle\UIBundle\Controller\AjaxOptionController(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['pim_reference_data.registry'] ?? ($container->privates['pim_reference_data.registry'] = new \Akeneo\Pim\Structure\Component\ReferenceData\ConfigurationRegistry())));
    }
}
