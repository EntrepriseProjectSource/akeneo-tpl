<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrateProductCriterionEvaluationCommand_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\MigrateProductCriterionEvaluationCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\MigrateProductCriterionEvaluationCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimee:data-quality-insights:migrate-product-criterion-evaluation', [], 'Migrate the products criteria evaluations with empty results and pending status.', false, function () use ($container): \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\MigrateProductCriterionEvaluationCommand {
            return ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\MigrateProductCriterionEvaluationCommand'] ?? $container->load('getMigrateProductCriterionEvaluationCommandService'));
        });
    }
}
