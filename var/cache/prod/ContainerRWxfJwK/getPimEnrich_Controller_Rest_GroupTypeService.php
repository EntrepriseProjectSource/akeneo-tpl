<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Controller_Rest_GroupTypeService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_enrich.controller.rest.group_type' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\GroupTypeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Controller/InternalApi/GroupTypeController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/RemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/BulkRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Remover/BaseRemover.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Updater/ObjectUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Updater/GroupTypeUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Factory/GroupTypeFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Normalizer/InternalApi/ConstraintViolationNormalizer.php';

        return $container->services['pim_enrich.controller.rest.group_type'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\GroupTypeController(($container->privates['pim_catalog.repository.group_type'] ?? $container->load('getPimCatalog_Repository_GroupTypeService')), ($container->privates['pim_internal_api_serializer'] ?? $container->load('getPimInternalApiSerializerService')), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Remover\BaseRemover(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'Akeneo\\Pim\\Structure\\Component\\Model\\GroupType'), ($container->privates['pim_catalog.updater.group_type'] ?? ($container->privates['pim_catalog.updater.group_type'] = new \Akeneo\Pim\Structure\Component\Updater\GroupTypeUpdater())), ($container->privates['pim_catalog.saver.group_type'] ?? $container->load('getPimCatalog_Saver_GroupTypeService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), ($container->privates['pim_catalog.factory.group_type'] ?? ($container->privates['pim_catalog.factory.group_type'] = new \Akeneo\Pim\Structure\Component\Factory\GroupTypeFactory('Akeneo\\Pim\\Structure\\Component\\Model\\GroupType'))), ($container->privates['pim_enrich.normalizer.violation'] ?? ($container->privates['pim_enrich.normalizer.violation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\ConstraintViolationNormalizer())));
    }
}