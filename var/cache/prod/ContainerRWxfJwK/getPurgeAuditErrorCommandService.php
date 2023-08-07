<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurgeAuditErrorCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Infrastructure\Audit\Command\PurgeAuditErrorCommand' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Audit\Command\PurgeAuditErrorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Audit/Command/PurgeAuditErrorCommand.php';

        $container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\Command\\PurgeAuditErrorCommand'] = $instance = new \Akeneo\Connectivity\Connection\Infrastructure\Audit\Command\PurgeAuditErrorCommand(($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\Persistence\\PurgeAuditErrorQuery'] ?? $container->load('getPurgeAuditErrorQueryService')));

        $instance->setName('akeneo:connectivity-audit:purge-error-count');

        return $instance;
    }
}
