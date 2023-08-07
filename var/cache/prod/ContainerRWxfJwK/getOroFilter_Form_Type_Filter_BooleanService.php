<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroFilter_Form_Type_Filter_BooleanService extends KernelProdContainer
{
    /*
     * Gets the private 'oro_filter.form.type.filter.boolean' shared service.
     *
     * @return \Oro\Bundle\FilterBundle\Form\Type\Filter\BooleanFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Form/Type/Filter/AbstractChoiceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Form/Type/Filter/BooleanFilterType.php';

        return $container->privates['oro_filter.form.type.filter.boolean'] = new \Oro\Bundle\FilterBundle\Form\Type\Filter\BooleanFilterType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
