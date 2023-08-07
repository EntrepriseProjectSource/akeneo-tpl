<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Factory_AttributeService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.factory.attribute' shared service.
     *
     * @return \Akeneo\Pim\Structure\Component\Factory\AttributeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Factory/SimpleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Factory/AttributeFactory.php';

        return $container->privates['pim_catalog.factory.attribute'] = new \Akeneo\Pim\Structure\Component\Factory\AttributeFactory(($container->services['pim_catalog.registry.attribute_type'] ?? $container->load('getPimCatalog_Registry_AttributeTypeService')), 'Akeneo\\Pim\\Structure\\Component\\Model\\Attribute', 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Product');
    }
}
