<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Repository_AttributeGroupService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.repository.attribute_group' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\AttributeGroupRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Repository/AttributeGroupRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Doctrine/ORM/Repository/AttributeGroupRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_catalog.repository.attribute_group'])) {
            return $container->privates['pim_catalog.repository.attribute_group'];
        }

        return $container->privates['pim_catalog.repository.attribute_group'] = $a->getRepository('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup');
    }
}