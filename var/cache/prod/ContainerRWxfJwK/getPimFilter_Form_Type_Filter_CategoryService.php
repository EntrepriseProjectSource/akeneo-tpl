<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimFilter_Form_Type_Filter_CategoryService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_filter.form.type.filter.category' shared service.
     *
     * @return \Oro\Bundle\PimFilterBundle\Form\Type\Filter\CategoryFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/FilterBundle/Form/Type/Filter/NumberFilterType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimFilterBundle/Form/Type/Filter/CategoryFilterType.php';

        return $container->privates['pim_filter.form.type.filter.category'] = new \Oro\Bundle\PimFilterBundle\Form\Type\Filter\CategoryFilterType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}