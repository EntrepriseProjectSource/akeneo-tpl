<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveMultiReferenceEntityValueApplierService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Product\Application\Applier\RemoveMultiReferenceEntityValueApplier' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Product\Application\Applier\RemoveMultiReferenceEntityValueApplier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Application/Applier/UserIntentApplier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Application/Applier/RemoveMultiReferenceEntityValueApplier.php';

        return $container->privates['Akeneo\\Pim\\Enrichment\\Product\\Application\\Applier\\RemoveMultiReferenceEntityValueApplier'] = new \Akeneo\Pim\Enrichment\Product\Application\Applier\RemoveMultiReferenceEntityValueApplier(($container->privates['pim_catalog.updater.product'] ?? $container->load('getPimCatalog_Updater_ProductService')));
    }
}
