<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_UseCases_Validator_LocalesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.use_cases.validator.locales' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateLocales
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateLocales.php';

        return $container->privates['akeneo.pim.enrichment.use_cases.validator.locales'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateLocales(($container->privates['pim_catalog.repository.cached_channel'] ?? $container->load('getPimCatalog_Repository_CachedChannelService')), ($container->privates['pim_catalog.repository.cached_locale'] ?? $container->load('getPimCatalog_Repository_CachedLocaleService')));
    }
}
