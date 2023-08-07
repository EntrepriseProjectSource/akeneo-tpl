<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Webhook_EventDataBuilder_ProductModelCreatedAndUpdatedService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.webhook.event_data_builder.product_model_created_and_updated' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Webhook\ProductModelCreatedAndUpdatedEventDataBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Component/Webhook/EventDataBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Webhook/ProductModelCreatedAndUpdatedEventDataBuilder.php';

        return $container->privates['pim_catalog.webhook.event_data_builder.product_model_created_and_updated'] = new \Akeneo\Pim\Enrichment\Component\Product\Webhook\ProductModelCreatedAndUpdatedEventDataBuilder(($container->privates['akeneo.pim.enrichment.product.connector.get_product_models_from_codes'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductModelsFromCodesService')), ($container->privates['pim_api.normalizer.connector_product_models'] ?? $container->load('getPimApi_Normalizer_ConnectorProductModelsService')));
    }
}
