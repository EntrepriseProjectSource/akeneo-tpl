<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_Controller_UserRoleRestService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_user.controller.user_role_rest' shared service.
     *
     * @return \Akeneo\UserManagement\Bundle\Controller\Rest\UserRoleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Controller/Rest/UserRoleController.php';

        return $container->services['pim_user.controller.user_role_rest'] = new \Akeneo\UserManagement\Bundle\Controller\Rest\UserRoleController(($container->services['pim_user.repository.role'] ?? $container->load('getPimUser_Repository_RoleService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()));
    }
}
