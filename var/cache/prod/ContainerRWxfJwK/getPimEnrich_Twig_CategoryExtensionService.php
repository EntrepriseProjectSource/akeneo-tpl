<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Twig_CategoryExtensionService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.twig.category_extension' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Twig\CategoryExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Twig/CategoryExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/ORM/Counter/CategoryItemsCounterRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/ORM/Counter/CategoryItemsCounterRegistry.php';

        $a = ($container->privates['pim_enrich.doctrine.counter.category_product'] ?? $container->load('getPimEnrich_Doctrine_Counter_CategoryProductService'));

        if (isset($container->privates['pim_enrich.twig.category_extension'])) {
            return $container->privates['pim_enrich.twig.category_extension'];
        }
        $b = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Counter\CategoryItemsCounterRegistry();
        $b->register($a, 'product');

        return $container->privates['pim_enrich.twig.category_extension'] = new \Akeneo\Pim\Enrichment\Bundle\Twig\CategoryExtension($b, 100);
    }
}