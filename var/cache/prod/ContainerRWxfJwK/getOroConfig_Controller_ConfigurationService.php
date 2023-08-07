<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroConfig_Controller_ConfigurationService extends KernelProdContainer
{
    /*
     * Gets the public 'oro_config.controller.configuration' shared service.
     *
     * @return \Oro\Bundle\ConfigBundle\Controller\Rest\ConfigurationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/ConfigBundle/Controller/Rest/ConfigurationController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $container->services['oro_config.controller.configuration'] = new \Oro\Bundle\ConfigBundle\Controller\Rest\ConfigurationController(($container->privates['oro_config.global'] ?? $container->load('getOroConfig_GlobalService')), ($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1))))), '@PimUIBundle/Resources/config/loading_messages.txt', [0 => ['section' => 'pim_ui', 'name' => 'language'], 1 => ['section' => 'pim_analytics', 'name' => 'version_update'], 2 => ['section' => 'pim_ui', 'name' => 'loading_message_enabled'], 3 => ['section' => 'pim_ui', 'name' => 'loading_messages']]);
    }
}
