<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_Resolver_CategoryFlysystemCacheService extends KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.cache.resolver.category_flysystem_cache' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\FlysystemV2Resolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/FlysystemV2Resolver.php';

        return $container->services['liip_imagine.cache.resolver.category_flysystem_cache'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\FlysystemV2Resolver(($container->services['oneup_flysystem.category_storage_filesystem'] ?? $container->load('getOneupFlysystem_CategoryStorageFilesystemService')), ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()), '__root__', 'thumbnail/category', 'private');
    }
}