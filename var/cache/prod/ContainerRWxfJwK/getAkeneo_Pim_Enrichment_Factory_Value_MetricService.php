<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_Factory_Value_MetricService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.factory.value.metric' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\MetricValueFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/Value/ValueFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/Value/MetricValueFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Factory/MetricFactory.php';

        return $container->privates['akeneo.pim.enrichment.factory.value.metric'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\MetricValueFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\MetricFactory(($container->privates['akeneo_measure.measure_converter'] ?? $container->load('getAkeneoMeasure_MeasureConverterService')), ($container->privates['akeneo_measure.manager'] ?? $container->load('getAkeneoMeasure_ManagerService')), 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Metric'));
    }
}
