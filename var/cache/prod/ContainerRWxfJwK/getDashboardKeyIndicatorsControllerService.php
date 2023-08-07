<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardKeyIndicatorsControllerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\Dashboard\DashboardKeyIndicatorsController' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\Dashboard\DashboardKeyIndicatorsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Symfony/Controller/Dashboard/DashboardKeyIndicatorsController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/KeyIndicator/GetKeyIndicatorsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/KeyIndicator/GetKeyIndicators.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Query/Dashboard/GetProductKeyIndicatorsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Elasticsearch/Query/GetProductKeyIndicatorsQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/KeyIndicator/ProductKeyIndicatorsByFeatureRegistry.php';

        $a = ($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService'));
        $b = ($container->privates['pim_catalog.repository.category'] ?? $container->getPimCatalog_Repository_CategoryService());
        $c = new \Akeneo\Pim\Automation\DataQualityInsights\Application\KeyIndicator\ProductKeyIndicatorsByFeatureRegistry(($container->privates['akeneo.pim.automation.data_quality_insights.all_criteria.feature'] ?? $container->getAkeneo_Pim_Automation_DataQualityInsights_AllCriteria_FeatureService()));
        $c->register(($container->privates['akeneo.pim.automation.data_quality_insights.query.compute_products_enrichment_status_query'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Query_ComputeProductsEnrichmentStatusQueryService')), NULL);
        $c->register(($container->privates['akeneo.pim.automation.data_quality_insights.query.compute_products_with_image_query'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Query_ComputeProductsWithImageQueryService')), NULL);

        return $container->services['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardKeyIndicatorsController'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\Dashboard\DashboardKeyIndicatorsController(new \Akeneo\Pim\Automation\DataQualityInsights\Application\KeyIndicator\GetKeyIndicators(new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\Query\GetProductKeyIndicatorsQuery($a, $b, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductInterface'), new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\Query\GetProductKeyIndicatorsQuery($a, $b, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModelInterface'), $c));
    }
}
