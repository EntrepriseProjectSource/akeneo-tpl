<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Product_Connector_GetProductModelsFromCodesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.product.connector.get_product_models_from_codes' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Connector\SqlGetConnectorProductModels
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/ProductModel/Query/GetConnectorProductModels.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Connector/SqlGetConnectorProductModels.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetValuesAndPropertiesFromProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetCategoryCodesByProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetProductAssociationsByProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetProductModelsAssociationsByProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/GetGroupAssociationsByProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/QuantifiedAssociation/GetProductQuantifiedAssociationsByProductModelCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/ProductModel/QuantifiedAssociation/GetProductModelQuantifiedAssociationsByProductModelCodes.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());
        $b = ($container->privates['akeneo.pim.enrichment.product.query.find_quantified_association_codes'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_FindQuantifiedAssociationCodesService'));

        return $container->privates['akeneo.pim.enrichment.product.connector.get_product_models_from_codes'] = new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Connector\SqlGetConnectorProductModels(new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetValuesAndPropertiesFromProductModelCodes($a), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetCategoryCodesByProductModelCodes($a), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetProductAssociationsByProductModelCodes($a), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetProductModelsAssociationsByProductModelCodes($a), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\GetGroupAssociationsByProductModelCodes($a), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\QuantifiedAssociation\GetProductQuantifiedAssociationsByProductModelCodes($a, ($container->privates['akeneo.pim.enrichment.product.query.quantified_association.get_id_mapping_from_product_ids_query'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_QuantifiedAssociation_GetIdMappingFromProductIdsQueryService')), $b), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\ProductModel\QuantifiedAssociation\GetProductModelQuantifiedAssociationsByProductModelCodes($a, ($container->privates['akeneo.pim.enrichment.product.query.quantified_association.get_id_mapping_from_product_model_ids_query'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Query_QuantifiedAssociation_GetIdMappingFromProductModelIdsQueryService')), $b), ($container->privates['akeneo.pim.enrichment.factory.read_value_collection'] ?? $container->load('getAkeneo_Pim_Enrichment_Factory_ReadValueCollectionService')));
    }
}