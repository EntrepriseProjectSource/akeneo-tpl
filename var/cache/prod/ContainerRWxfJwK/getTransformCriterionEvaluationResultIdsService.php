<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransformCriterionEvaluationResultIdsService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\TransformCriterionEvaluationResultIds' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\TransformCriterionEvaluationResultIds
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Transformation/TransformCriterionEvaluationResultIds.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Transformation/TransformChannelLocaleDataIds.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Transformation/CriterionEvaluationResultData/TransformResultDataIdsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Transformation/CriterionEvaluationResultData/TransformCommonCriterionResultDataIds.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Transformation/CriterionEvaluationResultData/TransformCompletenessResultDataIds.php';

        $a = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\Channels\\SqlChannels'] ?? $container->load('getSqlChannelsService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'];
        }
        $b = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\Locales\\SqlLocales'] ?? $container->load('getSqlLocalesService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'];
        }
        $c = ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\Attributes\\SqlAttributes'] ?? $container->load('getSqlAttributesService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'];
        }
        $d = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\TransformChannelLocaleDataIds($a, $b);

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Transformation\\TransformCriterionEvaluationResultIds'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\TransformCriterionEvaluationResultIds($d, new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\CriterionEvaluationResultData\TransformCommonCriterionResultDataIds($d, $c), new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Transformation\CriterionEvaluationResultData\TransformCompletenessResultDataIds($d));
    }
}