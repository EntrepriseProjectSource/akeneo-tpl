<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateNotMappedTablesSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Platform\Bundle\InstallerBundle\Event\Subscriber\CreateNotMappedTablesSubscriber' shared service.
     *
     * @return \Akeneo\Platform\Bundle\InstallerBundle\Event\Subscriber\CreateNotMappedTablesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/InstallerBundle/Event/Subscriber/CreateNotMappedTablesSubscriber.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\InstallerBundle\\Event\\Subscriber\\CreateNotMappedTablesSubscriber'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\InstallerBundle\\Event\\Subscriber\\CreateNotMappedTablesSubscriber'];
        }

        return $container->privates['Akeneo\\Platform\\Bundle\\InstallerBundle\\Event\\Subscriber\\CreateNotMappedTablesSubscriber'] = new \Akeneo\Platform\Bundle\InstallerBundle\Event\Subscriber\CreateNotMappedTablesSubscriber($a);
    }
}