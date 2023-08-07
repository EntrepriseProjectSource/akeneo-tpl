<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Product_Query_FindQuantifiedAssociationCodesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.product.query.find_quantified_association_codes' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Query\FindQuantifiedAssociationTypeCodes
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/FindQuantifiedAssociationTypeCodesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cache/CachedQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/ORM/Query/FindQuantifiedAssociationTypeCodes.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['akeneo.pim.enrichment.product.query.find_quantified_association_codes'])) {
            return $container->privates['akeneo.pim.enrichment.product.query.find_quantified_association_codes'];
        }

        return $container->privates['akeneo.pim.enrichment.product.query.find_quantified_association_codes'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Query\FindQuantifiedAssociationTypeCodes($a);
    }
}
