<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrichment_Validator_Constraint_TypeService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrichment.validator.constraint.type' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Validator\Constraints\TypeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Validator/Constraints/TypeValidator.php';

        $a = ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService'));

        if (isset($container->privates['pim_enrichment.validator.constraint.type'])) {
            return $container->privates['pim_enrichment.validator.constraint.type'];
        }

        return $container->privates['pim_enrichment.validator.constraint.type'] = new \Akeneo\Pim\Enrichment\Component\Validator\Constraints\TypeValidator($a);
    }
}