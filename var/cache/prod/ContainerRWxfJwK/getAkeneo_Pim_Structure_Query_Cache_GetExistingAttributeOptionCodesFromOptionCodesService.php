<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Structure_Query_Cache_GetExistingAttributeOptionCodesFromOptionCodesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.structure.query.cache.get_existing_attribute_option_codes_from_option_codes' shared service.
     *
     * @return \Akeneo\Pim\Structure\Bundle\Query\PublicApi\AttributeOption\Cache\LRUCachedGetExistingAttributeOptions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Component/Query/PublicApi/AttributeOption/GetExistingAttributeOptionCodes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Query/PublicApi/AttributeOption/Cache/LRUCachedGetExistingAttributeOptions.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Structure/Bundle/Query/PublicApi/AttributeOption/Sql/GetExistingAttributeOptionCodes.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['akeneo.pim.structure.query.cache.get_existing_attribute_option_codes_from_option_codes'])) {
            return $container->privates['akeneo.pim.structure.query.cache.get_existing_attribute_option_codes_from_option_codes'];
        }

        return $container->privates['akeneo.pim.structure.query.cache.get_existing_attribute_option_codes_from_option_codes'] = new \Akeneo\Pim\Structure\Bundle\Query\PublicApi\AttributeOption\Cache\LRUCachedGetExistingAttributeOptions(new \Akeneo\Pim\Structure\Bundle\Query\PublicApi\AttributeOption\Sql\GetExistingAttributeOptionCodes($a));
    }
}
