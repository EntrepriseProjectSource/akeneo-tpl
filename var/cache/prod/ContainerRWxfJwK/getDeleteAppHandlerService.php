<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAppHandlerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Application\Apps\Command\DeleteAppHandler' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Application\Apps\Command\DeleteAppHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Command/DeleteAppHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Apps/Persistence/GetAppDeletionQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Persistence/GetAppDeletionQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Apps/Persistence/DeleteConnectedAppQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Persistence/DeleteConnectedAppQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Service/DeleteUserGroupInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Service/User/DeleteUserGroup.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Service/DeleteUserRoleInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Service/User/DeleteUserRole.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Apps/Persistence/SaveRevokedAccessTokensOfDisconnectedAppQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Persistence/SaveRevokedAccessTokensOfDisconnectedAppQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        return $container->privates['Akeneo\\Connectivity\\Connection\\Application\\Apps\\Command\\DeleteAppHandler'] = new \Akeneo\Connectivity\Connection\Application\Apps\Command\DeleteAppHandler(new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Persistence\GetAppDeletionQuery($a), new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Persistence\DeleteConnectedAppQuery($a), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\DbalConnectionRepository'] ?? $container->load('getDbalConnectionRepositoryService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Service\\User\\DeleteUser'] ?? $container->load('getDeleteUserService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Client\\Fos\\DeleteClient'] ?? $container->load('getDeleteClientService')), new \Akeneo\Connectivity\Connection\Infrastructure\Service\User\DeleteUserGroup(($container->privates['pim_user.repository.group'] ?? $container->load('getPimUser_Repository_GroupService')), ($container->privates['pim_user.remover.user_group'] ?? $container->load('getPimUser_Remover_UserGroupService'))), new \Akeneo\Connectivity\Connection\Infrastructure\Service\User\DeleteUserRole(($container->services['pim_user.repository.role'] ?? $container->load('getPimUser_Repository_RoleService')), ($container->privates['pim_user.remover.role'] ?? $container->load('getPimUser_Remover_RoleService'))), new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Persistence\SaveRevokedAccessTokensOfDisconnectedAppQuery($a));
    }
}
