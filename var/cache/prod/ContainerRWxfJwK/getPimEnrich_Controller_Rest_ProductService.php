<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Controller_Rest_ProductService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_enrich.controller.rest.product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/InternalApi/ProductController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/FindIdentifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Product/SqlFindProductIdentifier.php';

        $a = ($container->privates['pim_catalog.builder.product'] ?? $container->load('getPimCatalog_Builder_ProductService'));

        return $container->services['pim_enrich.controller.rest.product'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductController(($container->privates['pim_catalog.repository.product'] ?? $container->load('getPimCatalog_Repository_ProductService')), ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), ($container->privates['pim_catalog.updater.product'] ?? $container->load('getPimCatalog_Updater_ProductService')), ($container->privates['pim_catalog.saver.product'] ?? $container->load('getPimCatalog_Saver_ProductService')), ($container->privates['pim_internal_api_serializer'] ?? $container->load('getPimInternalApiSerializerService')), ($container->privates['pim_catalog.validator.product'] ?? $container->load('getPimCatalog_Validator_ProductService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ($container->privates['pim_catalog.filter.chained'] ?? $container->load('getPimCatalog_Filter_ChainedService')), ($container->privates['pim_enrich.filter.product_edit_data'] ?? $container->load('getPimEnrich_Filter_ProductEditDataService')), ($container->privates['pim_catalog.remover.product'] ?? $container->load('getPimCatalog_Remover_ProductService')), $a, ($container->privates['pim_catalog.localization.localizer.converter'] ?? $container->load('getPimCatalog_Localization_Localizer_ConverterService')), ($container->privates['pim_catalog.comparator.filter.product'] ?? $container->load('getPimCatalog_Comparator_Filter_ProductService')), ($container->privates['pim_enrich.converter.enrich_to_standard.product_value'] ?? $container->load('getPimEnrich_Converter_EnrichToStandard_ProductValueService')), ($container->privates['pim_enrich.normalizer.product_violation'] ?? $container->load('getPimEnrich_Normalizer_ProductViolationService')), $a, ($container->privates['pim_enrich.filter.product_attribute_filter'] ?? $container->load('getPimEnrich_Filter_ProductAttributeFilterService')), ($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService')), ($container->privates['pim_enrich.product.message_bus'] ?? $container->load('getPimEnrich_Product_MessageBusService')), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Product\SqlFindProductIdentifier(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())), ($container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Subscriber\\UnableToSetIdentifiersSubscriber'] ?? $container->load('getUnableToSetIdentifiersSubscriberService')), ($container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Presenter\\UnableToSetIdentifierExceptionPresenter'] ?? $container->load('getUnableToSetIdentifierExceptionPresenterService')));
    }
}