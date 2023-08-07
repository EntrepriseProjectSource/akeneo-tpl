<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroTranslationDumpCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Oro\Bundle\TranslationBundle\Command\OroTranslationDumpCommand' shared service.
     *
     * @return \Oro\Bundle\TranslationBundle\Command\OroTranslationDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/TranslationBundle/Command/OroTranslationDumpCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $container->privates['Oro\\Bundle\\TranslationBundle\\Command\\OroTranslationDumpCommand'] = $instance = new \Oro\Bundle\TranslationBundle\Command\OroTranslationDumpCommand(($container->services['oro_translation.controller'] ?? $container->load('getOroTranslation_ControllerService')), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->services['router'] ?? $container->getRouterService()), $container->parameters['oro_translation.js_translation.domains'], (\dirname(__DIR__, 4).'/src'), $container->getEnv('APP_DEFAULT_LOCALE'));

        $instance->setName('oro:translation:dump');

        return $instance;
    }
}