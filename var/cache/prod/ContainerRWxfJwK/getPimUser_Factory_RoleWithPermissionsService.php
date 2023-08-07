<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_Factory_RoleWithPermissionsService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_user.factory.role_with_permissions' shared service.
     *
     * @return \Akeneo\UserManagement\Component\Factory\RoleWithPermissionsFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Component/Factory/RoleWithPermissionsFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactory.php';

        return $container->privates['pim_user.factory.role_with_permissions'] = new \Akeneo\UserManagement\Component\Factory\RoleWithPermissionsFactory(($container->privates['pim_user.factory.role'] ?? ($container->privates['pim_user.factory.role'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\UserManagement\\Component\\Model\\Role'))));
    }
}
