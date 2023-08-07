<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_Form_GroupService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_user.form.group' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ClearableErrorsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Form.php';

        return ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService'))->createNamed('pim_user_group_form', 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\GroupType');
    }
}
