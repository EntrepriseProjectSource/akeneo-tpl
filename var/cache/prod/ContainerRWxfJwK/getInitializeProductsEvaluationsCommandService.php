<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInitializeProductsEvaluationsCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\InitializeProductsEvaluationsCommand' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\InitializeProductsEvaluationsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Symfony/Command/InitializeProductsEvaluationsCommand.php';

        $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\InitializeProductsEvaluationsCommand'] = $instance = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\InitializeProductsEvaluationsCommand(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->privates['akeneo.pim.automation.data_quality_insights.product_criteria_by_feature_registry'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductCriteriaByFeatureRegistryService')), ($container->privates['akeneo.pim.automation.data_quality_insights.product_model_criteria_by_feature_registry'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductModelCriteriaByFeatureRegistryService')));

        $instance->setName('pim:data-quality-insights:initialize-products-evaluations');
        $instance->setDescription('Initialize the evaluations of all the products and product models.');

        return $instance;
    }
}