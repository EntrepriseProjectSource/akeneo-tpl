<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_QuantifiedAssociations_QuantifiedAssociationsFromAncestorsFilterService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.quantified_associations.quantified_associations_from_ancestors_filter' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\QuantifiedAssociation\QuantifiedAssociationsFromAncestorsFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/QuantifiedAssociation/QuantifiedAssociationsFromAncestorsFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/QuantifiedAssociation/QuantifiedAssociationsMerger.php';

        return $container->privates['pim_catalog.quantified_associations.quantified_associations_from_ancestors_filter'] = new \Akeneo\Pim\Enrichment\Component\Product\QuantifiedAssociation\QuantifiedAssociationsFromAncestorsFilter(($container->privates['pim_catalog.quantified_associations.quantified_associations_merger'] ?? ($container->privates['pim_catalog.quantified_associations.quantified_associations_merger'] = new \Akeneo\Pim\Enrichment\Component\Product\QuantifiedAssociation\QuantifiedAssociationsMerger())));
    }
}