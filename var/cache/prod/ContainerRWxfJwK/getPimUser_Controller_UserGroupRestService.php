<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_Controller_UserGroupRestService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_user.controller.user_group_rest' shared service.
     *
     * @return \Akeneo\UserManagement\Bundle\Controller\Rest\UserGroupController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Controller/Rest/UserGroupController.php';

        return $container->services['pim_user.controller.user_group_rest'] = new \Akeneo\UserManagement\Bundle\Controller\Rest\UserGroupController(($container->privates['pim_user.repository.group'] ?? $container->load('getPimUser_Repository_GroupService')));
    }
}