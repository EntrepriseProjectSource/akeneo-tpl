<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddProductModelScorePropertyService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\ProductGrid\AddProductModelScoreProperty' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\ProductGrid\AddProductModelScoreProperty
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Grid/Query/AddAdditionalProductModelProperties.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/ProductGrid/AddProductModelScoreProperty.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/ProductGrid/AddScoresToProductAndProductModelRows.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEntityIdFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductModelIdFactory.php';

        $a = ($container->privates['akeneo.pim.automation.data_quality_insights.product_grid.get_quality_scores_factory'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_ProductGrid_GetQualityScoresFactoryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\ProductGrid\\AddProductModelScoreProperty'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\ProductGrid\\AddProductModelScoreProperty'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\ProductGrid\\AddProductModelScoreProperty'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\ProductGrid\AddProductModelScoreProperty(new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\ProductGrid\AddScoresToProductAndProductModelRows($a, ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductModelIdFactory'] ?? ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductModelIdFactory'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductModelIdFactory()))));
    }
}