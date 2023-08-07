<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsolidateProductScoresService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Application\Consolidation\ConsolidateProductScores' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Application\Consolidation\ConsolidateProductScores
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/Consolidation/ConsolidateProductScores.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/Consolidation/ComputeScores.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Repository/ProductScoreRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Repository/ProductScoreRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/FilterPartialCriteriaEvaluations.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/Clock.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Clock/SystemClock.php';

        $a = ($container->privates['akeneo.pim.automation.data_quality_insights.query.get_product_criteria_evaluations'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Query_GetProductCriteriaEvaluationsService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'];
        }
        $b = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\Structure\\CachedGetLocalesByChannelQuery'] ?? $container->load('getCachedGetLocalesByChannelQueryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'];
        }
        $c = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'];
        }
        $d = ($container->privates['akeneo.pim.automation.data_quality_insights.product_criteria_by_feature_registry'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductCriteriaByFeatureRegistryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateProductScores'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\Consolidation\ConsolidateProductScores($a, new \Akeneo\Pim\Automation\DataQualityInsights\Application\Consolidation\ComputeScores($b, ($container->privates['akeneo.pim.automation.data_quality_insights.product_criteria_evaluation_registry'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductCriteriaEvaluationRegistryService'))), new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Repository\ProductScoreRepository($c), ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Clock\\SystemClock'] ?? ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Clock\\SystemClock'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Clock\SystemClock())), new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\FilterPartialCriteriaEvaluations($d));
    }
}