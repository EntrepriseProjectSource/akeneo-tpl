<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_EventSubscriber_AttributeOptionRemovalService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.event_subscriber.attribute_option_removal' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\EventListener\AttributeOptionRemovalSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/EventListener/AttributeOptionRemovalSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/FamilyVariant/Query/FamilyVariantsByAttributeAxesInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Storage/Sql/FamilyVariantsByAttributeAxes.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_catalog.event_subscriber.attribute_option_removal'])) {
            return $container->privates['pim_catalog.event_subscriber.attribute_option_removal'];
        }
        $b = ($container->privates['pim_catalog.query.product_and_product_model_query_builder_factory'] ?? $container->load('getPimCatalog_Query_ProductAndProductModelQueryBuilderFactoryService'));

        if (isset($container->privates['pim_catalog.event_subscriber.attribute_option_removal'])) {
            return $container->privates['pim_catalog.event_subscriber.attribute_option_removal'];
        }

        return $container->privates['pim_catalog.event_subscriber.attribute_option_removal'] = new \Akeneo\Pim\Structure\Bundle\EventListener\AttributeOptionRemovalSubscriber(new \Akeneo\Pim\Structure\Bundle\Storage\Sql\FamilyVariantsByAttributeAxes($a), $b);
    }
}
