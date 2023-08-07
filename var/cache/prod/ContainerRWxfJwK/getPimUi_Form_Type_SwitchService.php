<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUi_Form_Type_SwitchService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_ui.form.type.switch' shared service.
     *
     * @return \Akeneo\Platform\Bundle\UIBundle\Form\Type\SwitchType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Form/Type/SwitchType.php';

        return $container->privates['pim_ui.form.type.switch'] = new \Akeneo\Platform\Bundle\UIBundle\Form\Type\SwitchType();
    }
}
