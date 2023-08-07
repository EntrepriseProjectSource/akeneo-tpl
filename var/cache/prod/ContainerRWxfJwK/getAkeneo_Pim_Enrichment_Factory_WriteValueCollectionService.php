<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Factory_WriteValueCollectionService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.factory.write_value_collection' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Factory\WriteValueCollectionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/WriteValueCollectionFactory.php';

        $a = ($container->privates['akeneo.pim.enrichment.factory.read_value_collection'] ?? $container->load('getAkeneo_Pim_Enrichment_Factory_ReadValueCollectionService'));

        if (isset($container->privates['akeneo.pim.enrichment.factory.write_value_collection'])) {
            return $container->privates['akeneo.pim.enrichment.factory.write_value_collection'];
        }

        return $container->privates['akeneo.pim.enrichment.factory.write_value_collection'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\WriteValueCollectionFactory($a);
    }
}
