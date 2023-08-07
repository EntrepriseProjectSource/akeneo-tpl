<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Form_Type_AsyncSelectService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.form.type.async_select' shared service.
     *
     * @return \Akeneo\Platform\Bundle\UIBundle\Form\Type\AsyncSelectType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Form/Type/AsyncSelectType.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Form/Factory/IdentifiableModelTransformerFactory.php';

        return $container->privates['pim_enrich.form.type.async_select'] = new \Akeneo\Platform\Bundle\UIBundle\Form\Type\AsyncSelectType(($container->services['router'] ?? $container->getRouterService()), new \Akeneo\Platform\Bundle\UIBundle\Form\Factory\IdentifiableModelTransformerFactory('Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Transformer\\IdentifiableModelTransformer'));
    }
}