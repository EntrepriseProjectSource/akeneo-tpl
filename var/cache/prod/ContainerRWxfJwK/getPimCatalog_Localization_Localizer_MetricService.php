<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Localization_Localizer_MetricService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.localization.localizer.metric' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Localization\Localizer\MetricLocalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/Localizer/LocalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/Localizer/NumberLocalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Localization/Localizer/MetricLocalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/Factory/NumberFactory.php';

        $a = ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService'));

        if (isset($container->privates['pim_catalog.localization.localizer.metric'])) {
            return $container->privates['pim_catalog.localization.localizer.metric'];
        }

        return $container->privates['pim_catalog.localization.localizer.metric'] = new \Akeneo\Pim\Enrichment\Component\Product\Localization\Localizer\MetricLocalizer($a, ($container->privates['pim_catalog.localization.factory.number'] ?? ($container->privates['pim_catalog.localization.factory.number'] = new \Akeneo\Tool\Component\Localization\Factory\NumberFactory([]))), [0 => 'pim_catalog_metric']);
    }
}
