<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Validator_Constraints_LocaleValidatorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.validator.constraints.locale_validator' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\Component\Validator\Constraint\LocaleValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Component/Validator/Constraint/LocaleValidator.php';

        return $container->privates['pim_catalog.validator.constraints.locale_validator'] = new \Akeneo\Channel\Infrastructure\Component\Validator\Constraint\LocaleValidator(($container->privates['pim_catalog.repository.cached_locale'] ?? $container->load('getPimCatalog_Repository_CachedLocaleService')));
    }
}