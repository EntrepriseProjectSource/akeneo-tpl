<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Localization_Factory_DateService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.localization.factory.date' shared service.
     *
     * @return \Akeneo\Tool\Component\Localization\Factory\DateFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Localization/Factory/DateFactory.php';

        return $container->privates['pim_catalog.localization.factory.date'] = new \Akeneo\Tool\Component\Localization\Factory\DateFactory($container->parameters['pim_catalog.localization.factory.date.formats']);
    }
}