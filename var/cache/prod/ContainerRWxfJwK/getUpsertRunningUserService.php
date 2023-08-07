<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpsertRunningUserService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Platform\Bundle\ImportExportBundle\Infrastructure\UserManagement\UpsertRunningUser' shared service.
     *
     * @return \Akeneo\Platform\Bundle\ImportExportBundle\Infrastructure\UserManagement\UpsertRunningUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Infrastructure/UserManagement/UpsertRunningUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/back/ServiceApi/User/UpsertUserHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/back/Application/Handler/UpsertUserHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Domain/ResolveScheduledJobRunningUsername.php';

        $a = ($container->privates['pim_user.repository.user'] ?? $container->load('getPimUser_Repository_UserService'));

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'];
        }
        $b = ($container->privates['pim_user.updater.user'] ?? $container->load('getPimUser_Updater_UserService'));

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'];
        }
        $c = ($container->privates['pim_user.saver.user'] ?? $container->load('getPimUser_Saver_UserService'));

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'];
        }
        $d = ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService'));

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'];
        }
        $e = ($container->services['Akeneo\\UserManagement\\ServiceApi\\UserRole\\ListUserRoleInterface'] ?? $container->load('getListUserRoleInterfaceService'));

        if (isset($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'])) {
            return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'];
        }

        return $container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Infrastructure\\UserManagement\\UpsertRunningUser'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Infrastructure\UserManagement\UpsertRunningUser(new \Akeneo\UserManagement\Application\Handler\UpsertUserHandler($a, $b, ($container->privates['pim_user.factory.user'] ?? $container->load('getPimUser_Factory_UserService')), $c, $d), $e, ($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Domain\\ResolveScheduledJobRunningUsername'] ?? ($container->privates['Akeneo\\Platform\\Bundle\\ImportExportBundle\\Domain\\ResolveScheduledJobRunningUsername'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Domain\ResolveScheduledJobRunningUsername())));
    }
}
