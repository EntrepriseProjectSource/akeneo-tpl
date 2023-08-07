<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateConnectionService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Application\Apps\Service\CreateConnection' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Application\Apps\Service\CreateConnection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Service/CreateConnectionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Service/CreateConnection.php';

        return $container->privates['Akeneo\\Connectivity\\Connection\\Application\\Apps\\Service\\CreateConnection'] = new \Akeneo\Connectivity\Connection\Application\Apps\Service\CreateConnection(($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\DbalConnectionRepository'] ?? $container->load('getDbalConnectionRepositoryService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\DbalSelectConnectionWithCredentialsByCodeQuery'] ?? $container->load('getDbalSelectConnectionWithCredentialsByCodeQueryService')));
    }
}
