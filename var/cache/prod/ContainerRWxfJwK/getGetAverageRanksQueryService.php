<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAverageRanksQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Dashboard\GetAverageRanksQuery' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Dashboard\GetAverageRanksQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Query/Dashboard/GetAverageRanksQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Query/Dashboard/GetAverageRanksQuery.php';

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\Dashboard\\GetAverageRanksQuery'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Dashboard\GetAverageRanksQuery(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}