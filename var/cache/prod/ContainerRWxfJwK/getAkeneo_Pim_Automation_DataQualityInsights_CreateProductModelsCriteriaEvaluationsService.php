<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Automation_DataQualityInsights_CreateProductModelsCriteriaEvaluationsService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\CreateCriteriaEvaluations
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/CreateCriteriaEvaluations.php';

        $a = ($container->privates['akeneo.pim.automation.data_quality_insights.product_model_criteria_by_feature_registry'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductModelCriteriaByFeatureRegistryService'));

        if (isset($container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'])) {
            return $container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'];
        }
        $b = ($container->privates['akeneo.pim.automation.data_quality_insights.repository.product_model_criterion_evaluation'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Repository_ProductModelCriterionEvaluationService'));

        if (isset($container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'])) {
            return $container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'];
        }

        return $container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\CreateCriteriaEvaluations($a, $b);
    }
}
