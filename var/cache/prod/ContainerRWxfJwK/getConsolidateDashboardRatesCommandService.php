<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsolidateDashboardRatesCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\ConsolidateDashboardRatesCommand' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\ConsolidateDashboardRatesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Symfony/Command/ConsolidateDashboardRatesCommand.php';

        $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\ConsolidateDashboardRatesCommand'] = $instance = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\ConsolidateDashboardRatesCommand(($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Application\\Consolidation\\ConsolidateDashboardRates'] ?? $container->load('getConsolidateDashboardRatesService')));

        $instance->setName('pim:data-quality-insights:consolidate-dashboard-rates');
        $instance->setDescription('Consolidate the Data-Quality-Insights dashboard rates.');

        return $instance;
    }
}
