<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultiSelectProductValueRendererService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\MultiSelectProductValueRenderer' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\MultiSelectProductValueRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/ProductValueRenderer/ProductValueRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/ProductValueRenderer/MultiSelectProductValueRenderer.php';

        return $container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\PdfGeneration\\Renderer\\ProductValueRenderer\\MultiSelectProductValueRenderer'] = new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductValueRenderer\MultiSelectProductValueRenderer(($container->privates['pim_catalog.repository.cached_attribute_option'] ?? $container->load('getPimCatalog_Repository_CachedAttributeOptionService')));
    }
}
