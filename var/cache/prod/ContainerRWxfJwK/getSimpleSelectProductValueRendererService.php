<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimpleSelectProductValueRendererService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\SimpleSelectProductValueRenderer' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\SimpleSelectProductValueRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/ProductValueRenderer/ProductValueRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/ProductValueRenderer/SimpleSelectProductValueRenderer.php';

        return $container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\PdfGeneration\\Renderer\\ProductValueRenderer\\SimpleSelectProductValueRenderer'] = new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\SimpleSelectProductValueRenderer(($container->privates['pim_catalog.repository.cached_attribute_option'] ?? $container->load('getPimCatalog_Repository_CachedAttributeOptionService')));
    }
}