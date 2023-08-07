<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Validator_Constraints_ConversionUnitsService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.validator.constraints.conversion_units' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\Component\Validator\Constraint\ConversionUnitsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Component/Validator/Constraint/ConversionUnitsValidator.php';

        $a = ($container->privates['akeneo_measure.manager'] ?? $container->load('getAkeneoMeasure_ManagerService'));

        if (isset($container->privates['pim_catalog.validator.constraints.conversion_units'])) {
            return $container->privates['pim_catalog.validator.constraints.conversion_units'];
        }

        return $container->privates['pim_catalog.validator.constraints.conversion_units'] = new \Akeneo\Channel\Infrastructure\Component\Validator\Constraint\ConversionUnitsValidator(($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), $a);
    }
}