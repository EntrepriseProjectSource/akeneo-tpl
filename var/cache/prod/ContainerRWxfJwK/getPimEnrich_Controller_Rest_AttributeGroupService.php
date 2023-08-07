<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Controller_Rest_AttributeGroupService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_enrich.controller.rest.attribute_group' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\AttributeGroupController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Controller/InternalApi/AttributeGroupController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Repository/SearchableRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Doctrine/ORM/Repository/InternalApi/AttributeGroupSearchableRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/RemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Remover/BulkRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/StorageUtilsBundle/Doctrine/Common/Remover/BaseRemover.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Query/InternalApi/AttributeGroup/Sql/FindAttributeCodesForAttributeGroup.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactory.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $b = ($container->privates['pim_catalog.filter.chained'] ?? $container->load('getPimCatalog_Filter_ChainedService'));
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        return $container->services['pim_enrich.controller.rest.attribute_group'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\AttributeGroupController(($container->privates['pim_catalog.repository.attribute_group'] ?? $container->load('getPimCatalog_Repository_AttributeGroupService')), new \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\InternalApi\AttributeGroupSearchableRepository($a, 'Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup'), ($container->privates['pim_internal_api_serializer'] ?? $container->load('getPimInternalApiSerializerService')), $b, ($container->privates['pim_catalog.updater.attribute_group'] ?? $container->load('getPimCatalog_Updater_AttributeGroupService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['pim_catalog.saver.attribute_group'] ?? $container->load('getPimCatalog_Saver_AttributeGroupService')), new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Remover\BaseRemover($a, $c, 'Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup'), ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')), ($container->privates['pim_catalog.updater.attribute'] ?? $container->load('getPimCatalog_Updater_AttributeService')), ($container->privates['pim_catalog.saver.attribute'] ?? $container->load('getPimCatalog_Saver_AttributeService')), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()), ($container->privates['pim_catalog.factory.attribute_group'] ?? ($container->privates['pim_catalog.factory.attribute_group'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup'))), $c, $b, new \Akeneo\Pim\Structure\Bundle\Query\InternalApi\AttributeGroup\Sql\FindAttributeCodesForAttributeGroup(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())));
    }
}