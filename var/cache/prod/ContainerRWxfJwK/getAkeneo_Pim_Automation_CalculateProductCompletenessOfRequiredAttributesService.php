<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Automation_CalculateProductCompletenessOfRequiredAttributesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.automation.calculate_product_completeness_of_required_attributes' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Enrichment\CalculateProductCompleteness
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEvaluation/Enrichment/CalculateProductCompletenessInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Enrichment/CalculateProductCompleteness.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Completeness/CompletenessCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Query/PublicApi/Family/GetRequiredAttributesMasks.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Query/Completeness/GetRequiredAttributesMasksQuery.php';

        $a = ($container->privates['akeneo.pim.enrichment.completeness.query.get_product_masks'] ?? $container->load('getAkeneo_Pim_Enrichment_Completeness_Query_GetProductMasksService'));

        if (isset($container->privates['akeneo.pim.automation.calculate_product_completeness_of_required_attributes'])) {
            return $container->privates['akeneo.pim.automation.calculate_product_completeness_of_required_attributes'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['akeneo.pim.automation.calculate_product_completeness_of_required_attributes'])) {
            return $container->privates['akeneo.pim.automation.calculate_product_completeness_of_required_attributes'];
        }

        return $container->privates['akeneo.pim.automation.calculate_product_completeness_of_required_attributes'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Enrichment\CalculateProductCompleteness(new \Akeneo\Pim\Enrichment\Component\Product\Completeness\CompletenessCalculator($a, new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Completeness\GetRequiredAttributesMasksQuery($b, ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\BuildSqlMaskField'] ?? $container->load('getBuildSqlMaskFieldService')))));
    }
}
