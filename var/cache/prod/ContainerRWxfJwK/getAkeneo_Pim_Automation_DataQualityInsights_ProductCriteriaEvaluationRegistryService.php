<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Automation_DataQualityInsights_ProductCriteriaEvaluationRegistryService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.automation.data_quality_insights.product_criteria_evaluation_registry' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\CriteriaEvaluationRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/CriteriaEvaluationRegistry.php';

        return $container->privates['akeneo.pim.automation.data_quality_insights.product_criteria_evaluation_registry'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\CriteriaEvaluationRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_required_attributes'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_CriteriaEvaluation_EvaluateProductCompletenessOfRequiredAttributesService'));
            yield 1 => ($container->privates['akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_non_required_attributes'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_CriteriaEvaluation_EvaluateProductCompletenessOfNonRequiredAttributesService'));
            yield 2 => ($container->privates['akeneo.pim.automation.data_quality_insights.application.evaluate_product_image_enrichment'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Application_EvaluateProductImageEnrichmentService'));
        }, 3));
    }
}