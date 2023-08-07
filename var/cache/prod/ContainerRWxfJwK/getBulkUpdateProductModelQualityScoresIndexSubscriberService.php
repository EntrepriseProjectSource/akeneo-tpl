<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBulkUpdateProductModelQualityScoresIndexSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Subscriber\Product\BulkUpdateProductModelQualityScoresIndexSubscriber' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Subscriber\Product\BulkUpdateProductModelQualityScoresIndexSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Subscriber/Product/BulkUpdateProductModelQualityScoresIndexSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Elasticsearch/BulkUpdateProductQualityScoresInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Elasticsearch/BulkUpdateProductQualityScoresIndex.php';

        $a = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\ProductEvaluation\\GetProductScoresQuery'] ?? $container->load('getGetProductScoresQueryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'];
        }
        $b = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\ProductEvaluation\\GetProductModelScoresQuery'] ?? $container->load('getGetProductModelScoresQueryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'];
        }
        $c = ($container->privates['akeneo.pim.automation.data_quality_insights.compute_product_models_key_indicators'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ComputeProductModelsKeyIndicatorsService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Subscriber\\Product\\BulkUpdateProductModelQualityScoresIndexSubscriber'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Subscriber\Product\BulkUpdateProductModelQualityScoresIndexSubscriber(new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\BulkUpdateProductQualityScoresIndex(($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService')), $a, $b, $c, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModelInterface'));
    }
}