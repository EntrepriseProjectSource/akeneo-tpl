<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryBaseSaverService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Category\Application\Storage\Save\Saver\CategoryBaseSaver' shared service.
     *
     * @return \Akeneo\Category\Application\Storage\Save\Saver\CategoryBaseSaver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Application/Storage/Save/Saver/CategorySaver.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Application/Storage/Save/Saver/CategoryBaseSaver.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Application/Storage/Save/Query/UpsertCategoryBase.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Category/back/Infrastructure/Storage/Save/Query/UpsertCategoryBaseSql.php';

        return $container->privates['Akeneo\\Category\\Application\\Storage\\Save\\Saver\\CategoryBaseSaver'] = new \Akeneo\Category\Application\Storage\Save\Saver\CategoryBaseSaver(new \Akeneo\Category\Infrastructure\Storage\Save\Query\UpsertCategoryBaseSql(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->privates['Akeneo\\Category\\Domain\\Query\\GetCategoryInterface'] ?? $container->load('getGetCategoryInterfaceService'))), [0 => 'Akeneo\\Category\\Api\\Command\\UserIntents\\SetText', 1 => 'Akeneo\\Category\\Api\\Command\\UserIntents\\SetTextArea', 2 => 'Akeneo\\Category\\Api\\Command\\UserIntents\\SetRichText', 3 => 'Akeneo\\Category\\Api\\Command\\UserIntents\\SetImage']);
    }
}