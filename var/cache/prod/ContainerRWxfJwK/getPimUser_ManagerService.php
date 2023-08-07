<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_ManagerService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_user.manager' shared service.
     *
     * @return \Akeneo\UserManagement\Bundle\Manager\UserManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Manager/UserManager.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_user.manager'])) {
            return $container->privates['pim_user.manager'];
        }
        $b = ($container->privates['pim_user.saver.user'] ?? $container->load('getPimUser_Saver_UserService'));

        if (isset($container->privates['pim_user.manager'])) {
            return $container->privates['pim_user.manager'];
        }

        return $container->privates['pim_user.manager'] = new \Akeneo\UserManagement\Bundle\Manager\UserManager('Akeneo\\UserManagement\\Component\\Model\\User', $a, ($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), $b);
    }
}