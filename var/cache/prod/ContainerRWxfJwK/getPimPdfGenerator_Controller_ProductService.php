<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimPdfGenerator_Controller_ProductService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_pdf_generator.controller.product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductPdfController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/InternalApi/ProductPdfController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/RendererRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Renderer/ProductPdfRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Builder/PdfBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/Builder/DompdfBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/HtmlFormatter/HtmlFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/PdfGeneration/HtmlFormatter/ArabicHtmlFormatter.php';

        $a = new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\RendererRegistry();
        $a->addRenderer(new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductPdfRenderer(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Builder\DompdfBuilder((\dirname(__DIR__, 4).'/src'), (\dirname(__DIR__, 4).'/public'), new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\HtmlFormatter\ArabicHtmlFormatter()), ($container->services['liip_imagine.data.manager'] ?? $container->load('getLiipImagine_Data_ManagerService')), ($container->services['liip_imagine.cache.manager'] ?? $container->load('getLiipImagine_Cache_ManagerService')), ($container->services['liip_imagine.filter.manager'] ?? $container->load('getLiipImagine_Filter_ManagerService')), ($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService')), '@AkeneoPimEnrichment/Product/renderPdf.html.twig', NULL));

        return $container->services['pim_pdf_generator.controller.product'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductPdfController(($container->privates['pim_catalog.repository.product'] ?? $container->load('getPimCatalog_Repository_ProductService')), $a);
    }
}
