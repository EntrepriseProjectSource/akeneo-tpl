<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_Controller_RoleService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_user.controller.role' shared service.
     *
     * @return \Akeneo\UserManagement\Bundle\Controller\RoleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Controller/RoleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Form/Handler/AclRoleHandler.php';

        $a = new \Akeneo\UserManagement\Bundle\Form\Handler\AclRoleHandler(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), $container->parameters['pim_user.privileges'], ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $a->setAclManager(($container->services['oro_security.acl.manager'] ?? $container->load('getOroSecurity_Acl_ManagerService')));
        $a->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $container->services['pim_user.controller.role'] = $instance = new \Akeneo\UserManagement\Bundle\Controller\RoleController(($container->services['pim_user.repository.role'] ?? $container->load('getPimUser_Repository_RoleService')), ($container->privates['pim_user.remover.role'] ?? $container->load('getPimUser_Remover_RoleService')), ($container->services['oro_security.acl.sid_manager'] ?? $container->load('getOroSecurity_Acl_SidManagerService')), $a, ($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer($container);

        return $instance;
    }
}