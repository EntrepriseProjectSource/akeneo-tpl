<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroTranslation_ControllerService extends KernelProdContainer
{
    /*
     * Gets the public 'oro_translation.controller' shared service.
     *
     * @return \Oro\Bundle\TranslationBundle\Controller\Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/TranslationBundle/Controller/Controller.php';

        return $container->services['oro_translation.controller'] = new \Oro\Bundle\TranslationBundle\Controller\Controller(($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), '@OroTranslation/Translation/translation.js.twig', ['domains' => $container->parameters['oro_translation.js_translation.domains'], 'debug' => false]);
    }
}