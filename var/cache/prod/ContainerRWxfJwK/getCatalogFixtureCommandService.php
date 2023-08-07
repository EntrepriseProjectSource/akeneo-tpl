<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogFixtureCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Command\CatalogFixtureCommand' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Command\CatalogFixtureCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Command/CatalogFixtureCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/ServiceApi/Service/ConnectedAppFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/ServiceApi/Service/ConnectedAppRemover.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());
        $b = ($container->privates['pim_user.repository.user'] ?? $container->load('getPimUser_Repository_UserService'));

        $container->privates['Akeneo\\Catalogs\\Infrastructure\\Command\\CatalogFixtureCommand'] = $instance = new \Akeneo\Catalogs\Infrastructure\Command\CatalogFixtureCommand(new \Akeneo\Connectivity\Connection\ServiceApi\Service\ConnectedAppFactory(($container->privates['fos_oauth_server.storage.default'] ?? $container->load('getFosOauthServer_Storage_DefaultService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\OAuth\\ClientProvider'] ?? $container->load('getClientProviderService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\User\\CreateUserGroup'] ?? $container->load('getCreateUserGroupService')), ($container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\AppRoleWithScopesFactory'] ?? $container->load('getAppRoleWithScopesFactoryService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\User\\CreateUser'] ?? $container->load('getCreateUserService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Apps\\Service\\CreateConnection'] ?? $container->load('getCreateConnectionService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Apps\\Service\\CreateConnectedApp'] ?? $container->load('getCreateConnectedAppService')), $a, $b), ($container->privates['Akeneo\\Catalogs\\ServiceAPI\\Messenger\\CommandBus'] ?? $container->load('getCommandBusService')), $b, new \Akeneo\Connectivity\Connection\ServiceApi\Service\ConnectedAppRemover(($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Apps\\Command\\DeleteAppHandler'] ?? $container->load('getDeleteAppHandlerService'))), $a, 'prod');

        $instance->setName('akeneo:catalogs:fixtures');
        $instance->setDescription('Do not run this command in production env. Installs fixtures for dev only.');

        return $instance;
    }
}