<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimImportExport_Controller_CategoryTreesService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_import_export.controller.category_trees' shared service.
     *
     * @return \Akeneo\Platform\Bundle\ImportExportBundle\Controller\Ui\CategoryTreeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Controller/Ui/CategoryTreeController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Api/FindGrantedCategoryTrees.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Category/SqlFindGrantedCategoryTrees.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Api/GetCategoryChildrenCodesPerTreeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Category/SqlGetCategoryChildrenCodesPerTree.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Filter/CategoryCodeFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Filter/NullCategoryCodeFilter.php';

        return $container->services['pim_import_export.controller.category_trees'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Controller\Ui\CategoryTreeController(new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Category\SqlFindGrantedCategoryTrees(($container->privates['pim_catalog.repository.category'] ?? $container->getPimCatalog_Repository_CategoryService()), ($container->privates['pim_catalog.normalizer.standard.translation'] ?? $container->load('getPimCatalog_Normalizer_Standard_TranslationService')), ($container->privates['pim_catalog.filter.chained'] ?? $container->load('getPimCatalog_Filter_ChainedService'))), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Category\SqlGetCategoryChildrenCodesPerTree(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), new \Akeneo\Pim\Enrichment\Bundle\Filter\NullCategoryCodeFilter()));
    }
}