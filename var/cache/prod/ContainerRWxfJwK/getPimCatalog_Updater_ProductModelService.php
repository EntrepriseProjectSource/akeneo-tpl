<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Updater_ProductModelService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.updater.product_model' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Updater\ProductModelUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Updater/ObjectUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/ProductModelUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Association/ParentAssociationsFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Validator/QuantifiedAssociationsStructureValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Validator/QuantifiedAssociationsStructureValidator.php';

        return $container->privates['pim_catalog.updater.product_model'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\ProductModelUpdater(($container->privates['pim_catalog.updater.property_setter'] ?? $container->load('getPimCatalog_Updater_PropertySetterService')), ($container->privates['pim_catalog.updater.entity_with_values'] ?? $container->load('getPimCatalog_Updater_EntityWithValuesService')), ($container->privates['pim_catalog.repository.family_variant'] ?? $container->load('getPimCatalog_Repository_FamilyVariantService')), ($container->privates['pim_catalog.repository.product_model'] ?? $container->load('getPimCatalog_Repository_ProductModelService')), ($container->privates['pim_catalog.association.filter.parent_associations'] ?? ($container->privates['pim_catalog.association.filter.parent_associations'] = new \Akeneo\Pim\Enrichment\Component\Product\Association\ParentAssociationsFilter())), ($container->privates['pim_catalog.quantified_associations.quantified_associations_from_ancestors_filter'] ?? $container->load('getPimCatalog_QuantifiedAssociations_QuantifiedAssociationsFromAncestorsFilterService')), ($container->privates['pim_catalog.updater.validator.quantified_associations_structure_validator'] ?? ($container->privates['pim_catalog.updater.validator.quantified_associations_structure_validator'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Validator\QuantifiedAssociationsStructureValidator())), [0 => 'identifier', 1 => 'created', 2 => 'updated', 3 => 'parent_associations', 4 => 'metadata']);
    }
}