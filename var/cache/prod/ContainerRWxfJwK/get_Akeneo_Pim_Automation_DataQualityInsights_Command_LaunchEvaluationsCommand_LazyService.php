<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Akeneo_Pim_Automation_DataQualityInsights_Command_LaunchEvaluationsCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.akeneo.pim.automation.data_quality_insights.command.launch_evaluations_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.akeneo.pim.automation.data_quality_insights.command.launch_evaluations_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pim:data-quality-insights:evaluations', [], 'Launch the evaluations of products and structure', false, function () use ($container): \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\LaunchEvaluationsCommand {
            return ($container->privates['akeneo.pim.automation.data_quality_insights.command.launch_evaluations_command'] ?? $container->load('getAkeneo_Pim_Automation_DataQualityInsights_Command_LaunchEvaluationsCommandService'));
        });
    }
}
