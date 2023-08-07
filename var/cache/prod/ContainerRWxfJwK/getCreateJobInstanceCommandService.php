<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateJobInstanceCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Tool\Bundle\BatchBundle\Command\CreateJobInstanceCommand' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchBundle\Command\CreateJobInstanceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Command/CreateJobInstanceCommand.php';

        $container->privates['Akeneo\\Tool\\Bundle\\BatchBundle\\Command\\CreateJobInstanceCommand'] = $instance = new \Akeneo\Tool\Bundle\BatchBundle\Command\CreateJobInstanceCommand(($container->services['Akeneo\\Platform\\Job\\Application\\CreateJobInstanceHandler'] ?? $container->load('getCreateJobInstanceHandlerService')));

        $instance->setName('akeneo:batch:create-job');

        return $instance;
    }
}
