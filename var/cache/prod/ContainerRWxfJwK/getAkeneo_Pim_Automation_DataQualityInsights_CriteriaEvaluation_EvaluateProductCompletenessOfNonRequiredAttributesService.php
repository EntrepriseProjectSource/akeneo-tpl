<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Automation_DataQualityInsights_CriteriaEvaluation_EvaluateProductCompletenessOfNonRequiredAttributesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_non_required_attributes' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\Enrichment\EvaluateCompletenessOfNonRequiredAttributes
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/EvaluateCriterionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/Enrichment/EvaluateCompletenessOfNonRequiredAttributes.php';

        $a = ($container->privates['akeneo.pim.automation.calculate_product_completeness_of_non_required_attributes'] ?? $container->load('getAkeneo_Pim_Automation_CalculateProductCompletenessOfNonRequiredAttributesService'));

        if (isset($container->privates['akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_non_required_attributes'])) {
            return $container->privates['akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_non_required_attributes'];
        }

        return $container->privates['akeneo.pim.automation.data_quality_insights.criteria_evaluation.evaluate_product_completeness_of_non_required_attributes'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductEvaluation\Enrichment\EvaluateCompletenessOfNonRequiredAttributes($a, ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductEvaluation\\Enrichment\\EvaluateCompleteness'] ?? $container->load('getEvaluateCompletenessService')));
    }
}
