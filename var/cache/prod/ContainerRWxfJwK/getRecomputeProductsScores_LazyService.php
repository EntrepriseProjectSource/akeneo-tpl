<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecomputeProductsScores_LazyService extends KernelProdContainer
{
    /*
     * Gets the private '.Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\RecomputeProductsScores.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\RecomputeProductsScores.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pim:data-quality-insights:recompute-product-scores', [], 'Launch the job that will re-compute all the products scores', false, function () use ($container): \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Command\RecomputeProductsScores {
            return ($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Command\\RecomputeProductsScores'] ?? $container->load('getRecomputeProductsScoresService'));
        });
    }
}