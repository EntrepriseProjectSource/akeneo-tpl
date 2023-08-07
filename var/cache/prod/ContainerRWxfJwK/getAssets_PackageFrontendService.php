<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageFrontendService extends KernelProdContainer
{
    /*
     * Gets the private 'assets._package_frontend' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/VersionStrategy/CacheBusterVersionStrategy.php';

        return $container->privates['assets._package_frontend'] = new \Symfony\Component\Asset\PathPackage('', new \Akeneo\Platform\Bundle\UIBundle\VersionStrategy\CacheBusterVersionStrategy(($container->services['pim_catalog.version_provider'] ?? $container->load('getPimCatalog_VersionProviderService'))), ($container->privates['assets.context'] ?? $container->load('getAssets_ContextService')));
    }
}