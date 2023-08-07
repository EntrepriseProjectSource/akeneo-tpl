<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHasUpToDateProductEvaluationQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\ProductEvaluation\HasUpToDateProductEvaluationQuery' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\ProductEvaluation\HasUpToDateProductEvaluationQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Query/ProductEvaluation/HasUpToDateEvaluationQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Query/ProductEvaluation/HasUpToDateProductEvaluationQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductEntityIdFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Application/ProductUuidFactory.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\ProductEvaluation\\HasUpToDateProductEvaluationQuery'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\ProductEvaluation\\HasUpToDateProductEvaluationQuery'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\ProductEvaluation\\HasUpToDateProductEvaluationQuery'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\ProductEvaluation\HasUpToDateProductEvaluationQuery($a, ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductUuidFactory'] ?? ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\ProductUuidFactory'] = new \Akeneo\Pim\Automation\DataQualityInsights\Application\ProductUuidFactory())));
    }
}
