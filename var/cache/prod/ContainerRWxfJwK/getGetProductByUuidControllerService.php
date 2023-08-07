<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductByUuidControllerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\GetProductByUuidController' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\GetProductByUuidController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/ExternalApi/GetProductByUuidController.php';

        return $container->services['Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\GetProductByUuidController'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\GetProductByUuidController(($container->privates['Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\ExternalApi\\ConnectorProductWithUuidNormalizer'] ?? $container->load('getConnectorProductWithUuidNormalizerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsService')), ($container->privates['akeneo.pim.enrichment.product.connector.get_product_from_uuids_with_options'] ?? $container->load('getAkeneo_Pim_Enrichment_Product_Connector_GetProductFromUuidsWithOptionsService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['akeneo.pim.enrichment.use_cases.get_products_with_quality_scores'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_GetProductsWithQualityScoresService')), ($container->privates['akeneo.pim.enrichment.use_cases.get_products_with_completenesses'] ?? $container->load('getAkeneo_Pim_Enrichment_UseCases_GetProductsWithCompletenessesService')), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()));
    }
}