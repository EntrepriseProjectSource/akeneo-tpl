<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOroSecurity_ActionMetadataProvider_Cache_ClearerService extends KernelProdContainer
{
    /*
     * Gets the private 'oro_security.action_metadata_provider.cache.clearer' shared service.
     *
     * @return \Oro\Bundle\SecurityBundle\Cache\ActionMetadataCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/SecurityBundle/Cache/ActionMetadataCacheClearer.php';

        return $container->privates['oro_security.action_metadata_provider.cache.clearer'] = new \Oro\Bundle\SecurityBundle\Cache\ActionMetadataCacheClearer(($container->privates['oro_security.action_metadata_provider'] ?? $container->getOroSecurity_ActionMetadataProviderService()));
    }
}