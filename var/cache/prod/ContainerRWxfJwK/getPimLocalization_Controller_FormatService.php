<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimLocalization_Controller_FormatService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_localization.controller.format' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\FormatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/InternalApi/FormatController.php';

        return $container->services['pim_localization.controller.format'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\FormatController(($container->privates['pim_catalog.localization.factory.date'] ?? $container->load('getPimCatalog_Localization_Factory_DateService')), ($container->privates['pim_catalog.localization.factory.datetime'] ?? $container->load('getPimCatalog_Localization_Factory_DatetimeService')), ($container->privates['pim_enrich.resolver.locale'] ?? $container->load('getPimEnrich_Resolver_LocaleService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ['decimal_separators' => $container->parameters['pim_catalog.localization.decimal_separators'], 'date_formats' => $container->parameters['pim_catalog.localization.date_formats']]);
    }
}
