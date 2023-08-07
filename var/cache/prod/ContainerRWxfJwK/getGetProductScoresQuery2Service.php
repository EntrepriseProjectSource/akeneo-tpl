<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductScoresQuery2Service extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\PublicApi\Query\ProductEvaluation\GetProductScoresQuery' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\PublicApi\Query\ProductEvaluation\GetProductScoresQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/PublicApi/Query/ProductEvaluation/GetProductScoresQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/PublicApi/Query/ProductEvaluation/GetProductScoresQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Query/ProductEvaluation/GetProductScoresByUuidsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Query/ProductEvaluation/GetProductScoresByUuidsQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\PublicApi\\Query\\ProductEvaluation\\GetProductScoresQuery'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\PublicApi\\Query\\ProductEvaluation\\GetProductScoresQuery'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\PublicApi\\Query\\ProductEvaluation\\GetProductScoresQuery'] = new \Akeneo\Pim\Automation\DataQualityInsights\PublicApi\Query\ProductEvaluation\GetProductScoresQuery(new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\ProductEvaluation\GetProductScoresByUuidsQuery($a), ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\GetScoresByCriteriaStrategy'] ?? $container->load('getGetScoresByCriteriaStrategyService')));
    }
}