<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPopulateProductModelScoresAndKeyIndicatorsCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\PopulateProductModelScoresAndKeyIndicatorsCommand' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\PopulateProductModelScoresAndKeyIndicatorsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Symfony/Command/PopulateProductModelScoresAndKeyIndicatorsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEntityIdFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductModelIdFactory.php';

        $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\PopulateProductModelScoresAndKeyIndicatorsCommand'] = $instance = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\PopulateProductModelScoresAndKeyIndicatorsCommand(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['akeneo.pim.automation.data_quality_insights.create_product_models_criteria_evaluations'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_CreateProductModelsCriteriaEvaluationsService')), ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductModelIdFactory'] ?? ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductModelIdFactory'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductModelIdFactory())));

        $instance->setName('pim:data-quality-insights:populate-product-models-scores-and-ki');

        return $instance;
    }
}
