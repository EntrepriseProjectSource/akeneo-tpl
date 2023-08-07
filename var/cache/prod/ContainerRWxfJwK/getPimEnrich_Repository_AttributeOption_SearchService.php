<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Repository_AttributeOption_SearchService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.repository.attribute_option.search' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\InternalApi\AttributeOptionSearchableRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Repository/SearchableRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Doctrine/ORM/Repository/InternalApi/AttributeOptionSearchableRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['pim_enrich.repository.attribute_option.search'])) {
            return $container->privates['pim_enrich.repository.attribute_option.search'];
        }

        return $container->privates['pim_enrich.repository.attribute_option.search'] = new \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\InternalApi\AttributeOptionSearchableRepository($a, 'Akeneo\\Pim\\Structure\\Component\\Model\\AttributeOption', ($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService')));
    }
}