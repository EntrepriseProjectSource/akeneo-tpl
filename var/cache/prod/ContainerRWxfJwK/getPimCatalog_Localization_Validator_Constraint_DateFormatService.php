<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Localization_Validator_Constraint_DateFormatService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.localization.validator.constraint.date_format' shared service.
     *
     * @return \Akeneo\Tool\Component\Localization\Validator\Constraints\DateFormatValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/Validator/Constraints/DateFormatValidator.php';

        return $container->privates['pim_catalog.localization.validator.constraint.date_format'] = new \Akeneo\Tool\Component\Localization\Validator\Constraints\DateFormatValidator(($container->privates['pim_catalog.localization.factory.date'] ?? $container->load('getPimCatalog_Localization_Factory_DateService')));
    }
}