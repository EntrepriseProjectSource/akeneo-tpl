<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttributeSourceContainsValidScopeValidatorService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Catalogs\Infrastructure\Validation\ProductMapping\AttributeSourceContainsValidScopeValidator' shared autowired service.
     *
     * @return \Akeneo\Catalogs\Infrastructure\Validation\ProductMapping\AttributeSourceContainsValidScopeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/catalogs/back/src/Infrastructure/Validation/ProductMapping/AttributeSourceContainsValidScopeValidator.php';

        return $container->privates['Akeneo\\Catalogs\\Infrastructure\\Validation\\ProductMapping\\AttributeSourceContainsValidScopeValidator'] = new \Akeneo\Catalogs\Infrastructure\Validation\ProductMapping\AttributeSourceContainsValidScopeValidator(($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Attribute\\FindOneAttributeByCodeQuery'] ?? $container->load('getFindOneAttributeByCodeQueryService')), ($container->privates['Akeneo\\Catalogs\\Infrastructure\\Persistence\\Channel\\GetChannelQuery'] ?? $container->load('getGetChannelQueryService')));
    }
}