<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Controller_CategoryTree_ProductService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_enrich.controller.category_tree.product' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\CategoryTreeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Controller/Ui/CategoryTreeController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/RemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/BulkRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Remover/BaseRemover.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Category/Query/CountTreesChildrenInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Storage/Sql/Category/CountTreesChildren.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Infrastructure/Symfony/Form/CategoryFormViewNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Infrastructure/Symfony/Form/CategoryFormViewNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Domain/Query/GetCategoryTreesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Infrastructure/Storage/Sql/GetCategoryTreesSql.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/InternalApi/ConstraintViolationNormalizer.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        $container->services['pim_enrich.controller.category_tree.product'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\CategoryTreeController(($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ($container->privates['pim_catalog.saver.category'] ?? $container->load('getPimCatalog_Saver_CategoryService')), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Remover\BaseRemover(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'Akeneo\\Category\\Infrastructure\\Component\\Model\\Category'), ($container->privates['pim_catalog.factory.category'] ?? ($container->privates['pim_catalog.factory.category'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Category\\Infrastructure\\Component\\Model\\Category'))), ($container->privates['pim_catalog.repository.category'] ?? $container->getPimCatalog_Repository_CategoryService()), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->privates['pim_internal_api_serializer'] ?? $container->load('getPimInternalApiSerializerService')), ($container->privates['pim_catalog.updater.category_translatable'] ?? $container->load('getPimCatalog_Updater_CategoryTranslatableService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['pim_enrich.normalizer.violation'] ?? ($container->privates['pim_enrich.normalizer.violation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\ConstraintViolationNormalizer())), ($container->privates['pim_enrich.doctrine.counter.category_product'] ?? $container->load('getPimEnrich_Doctrine_Counter_CategoryProductService')), new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Category\CountTreesChildren($a), new \Akeneo\Category\Infrastructure\Symfony\Form\CategoryFormViewNormalizer(), ($container->privates['Akeneo\\Category\\Domain\\Query\\GetCategoryInterface'] ?? $container->load('getGetCategoryInterfaceService')), new \Akeneo\Category\Infrastructure\Storage\Sql\GetCategoryTreesSql($a), ($container->services['feature_flags'] ?? $container->getFeatureFlagsService()), ['related_entity' => 'product', 'form_type' => 'Akeneo\\Category\\Infrastructure\\Symfony\\Form\\Type\\CategoryType', 'acl' => 'pim_enrich_product', 'route' => 'pim_enrich']);

        $instance->setContainer($container);

        return $instance;
    }
}
