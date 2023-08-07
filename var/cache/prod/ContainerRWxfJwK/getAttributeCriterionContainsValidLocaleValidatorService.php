<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttributeCriterionContainsValidLocaleValidatorService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Validation\ProductSelection\AttributeCriterionContainsValidLocaleValidator' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Validation\ProductSelection\AttributeCriterionContainsValidLocaleValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Validation/ProductSelection/AttributeCriterionContainsValidLocaleValidator.php';

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Validation\\ProductSelection\\AttributeCriterionContainsValidLocaleValidator'] = new \Akeneo\Catalogs\Infrastructure\Validation\ProductSelection\AttributeCriterionContainsValidLocaleValidator(($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Attribute\\FindOneAttributeByCodeQuery'] ?? $container->load('getFindOneAttributeByCodeQueryService')), ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Locale\\GetLocalesQuery'] ?? $container->load('getGetLocalesQueryService')), ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Locale\\GetChannelLocalesQuery'] ?? $container->load('getGetChannelLocalesQueryService')));
    }
}