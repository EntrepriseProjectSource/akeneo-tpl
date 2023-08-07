<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQualityScoreFilterService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\Filter\QualityScoreFilter' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\Filter\QualityScoreFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/Filter/FieldFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Elasticsearch/Filter/Field/AbstractFieldFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Elasticsearch/Filter/QualityScoreFilter.php';

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Elasticsearch\\Filter\\QualityScoreFilter'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Elasticsearch\Filter\QualityScoreFilter(($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Elasticsearch\\GetScoresPropertyStrategy'] ?? $container->load('getGetScoresPropertyStrategyService')));
    }
}
