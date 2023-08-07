<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConvertStandardFormatIntoUserIntentsHandlerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Product\Application\StandardFormat\ConvertStandardFormatIntoUserIntentsHandler' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Product\Application\StandardFormat\ConvertStandardFormatIntoUserIntentsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Application/StandardFormat/ConvertStandardFormatIntoUserIntentsHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/Domain/UserIntent/UserIntentFactoryRegistry.php';

        return $container->privates['Akeneo\\Pim\\Enrichment\\Product\\Application\\StandardFormat\\ConvertStandardFormatIntoUserIntentsHandler'] = new \Akeneo\Pim\Enrichment\Product\Application\StandardFormat\ConvertStandardFormatIntoUserIntentsHandler(new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\UserIntentFactoryRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\ValueUserIntentFactoryRegistry'] ?? $container->load('getValueUserIntentFactoryRegistryService'));
            yield 1 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\FamilyUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\FamilyUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\FamilyUserIntentFactory()));
            yield 2 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\AssociationsUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\AssociationsUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\AssociationsUserIntentFactory()));
            yield 3 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\CategoriesUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\CategoriesUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\CategoriesUserIntentFactory()));
            yield 4 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\EnabledUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\EnabledUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\EnabledUserIntentFactory()));
            yield 5 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\GroupsUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\GroupsUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\GroupsUserIntentFactory()));
            yield 6 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\ParentUserIntentFactory'] ?? ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\ParentUserIntentFactory'] = new \Akeneo\Pim\Enrichment\Product\Domain\UserIntent\Factory\ParentUserIntentFactory()));
            yield 7 => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Domain\\UserIntent\\Factory\\QuantifiedAssociationUserIntentFactory'] ?? $container->load('getQuantifiedAssociationUserIntentFactoryService'));
        }, 8), [0 => 'uuid', 1 => 'identifier', 2 => 'created', 3 => 'updated', 4 => 'parent_associations', 5 => 'metadata', 6 => 'quality_scores', 7 => 'completenesses']));
    }
}
