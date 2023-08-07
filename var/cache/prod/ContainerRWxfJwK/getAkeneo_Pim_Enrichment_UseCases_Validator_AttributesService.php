<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Pim_Enrichment_UseCases_Validator_AttributesService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo.pim.enrichment.use_cases.validator.attributes' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAttributes
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Connector/UseCase/Validator/ValidateAttributes.php';

        return $container->privates['akeneo.pim.enrichment.use_cases.validator.attributes'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\Validator\ValidateAttributes(($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService')));
    }
}
