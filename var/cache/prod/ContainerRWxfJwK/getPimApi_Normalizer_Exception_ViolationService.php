<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Normalizer_Exception_ViolationService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_api.normalizer.exception.violation' shared service.
     *
     * @return \Akeneo\Tool\Component\Api\Normalizer\Exception\ViolationNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Normalizer/Exception/ViolationNormalizer.php';

        return $container->privates['pim_api.normalizer.exception.violation'] = new \Akeneo\Tool\Component\Api\Normalizer\Exception\ViolationNormalizer(($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService')));
    }
}