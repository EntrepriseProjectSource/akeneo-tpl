<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetValuesAndPropertiesFromProductUuidsService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Product\GetValuesAndPropertiesFromProductUuids' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Product\GetValuesAndPropertiesFromProductUuids
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Product/GetValuesAndPropertiesFromProductUuids.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Storage\\Sql\\Product\\GetValuesAndPropertiesFromProductUuids'])) {
            return $container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Storage\\Sql\\Product\\GetValuesAndPropertiesFromProductUuids'];
        }

        return $container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Storage\\Sql\\Product\\GetValuesAndPropertiesFromProductUuids'] = new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Product\GetValuesAndPropertiesFromProductUuids($a);
    }
}