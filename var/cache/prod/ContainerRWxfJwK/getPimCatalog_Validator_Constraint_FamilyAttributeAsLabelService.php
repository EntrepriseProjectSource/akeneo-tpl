<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Validator_Constraint_FamilyAttributeAsLabelService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.validator.constraint.family_attribute_as_label' shared service.
     *
     * @return \Akeneo\Pim\Structure\Component\Validator\Constraints\FamilyAttributeAsLabelValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Validator/Constraints/FamilyAttributeAsLabelValidator.php';

        return $container->privates['pim_catalog.validator.constraint.family_attribute_as_label'] = new \Akeneo\Pim\Structure\Component\Validator\Constraints\FamilyAttributeAsLabelValidator();
    }
}
