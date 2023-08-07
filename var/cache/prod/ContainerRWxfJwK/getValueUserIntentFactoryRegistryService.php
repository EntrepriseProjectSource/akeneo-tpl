<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValueUserIntentFactoryRegistryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\ValueUserIntentFactoryRegistry' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\ValueUserIntentFactoryRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Domain/UserIntent/Factory/UserIntentFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Domain/UserIntent/Factory/ValueUserIntentFactoryRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Domain/Query/GetAttributeTypes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Infrastructure/AntiCorruptionLayer/ACLGetAttributeTypes.php';

        return $container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\ValueUserIntentFactoryRegistry'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\ValueUserIntentFactoryRegistry(new \Akeneo\Pim\Enrichment\Product\Infrastructure\AntiCorruptionLayer\ACLGetAttributeTypes(($container->privates['pim_catalog.repository.attribute'] ?? $container->load('getPimCatalog_Repository_AttributeService'))), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\BooleanValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\BooleanValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\BooleanValueUserIntentFactory()));
            yield 1 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\DateValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\DateValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\DateValueUserIntentFactory()));
            yield 2 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\IdentifierValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\IdentifierValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\IdentifierValueUserIntentFactory()));
            yield 3 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\StringValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\StringValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\StringValueUserIntentFactory()));
            yield 4 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\TableValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\TableValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\TableValueUserIntentFactory()));
            yield 5 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\MeasurementValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\MeasurementValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\MeasurementValueUserIntentFactory()));
            yield 6 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\NumberValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\NumberValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\NumberValueUserIntentFactory()));
            yield 7 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\MultiStringValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\MultiStringValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\MultiStringValueUserIntentFactory()));
            yield 8 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\PriceCollectionValueUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\Value\\PriceCollectionValueUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\Value\PriceCollectionValueUserIntentFactory()));
        }, 9));
    }
}
