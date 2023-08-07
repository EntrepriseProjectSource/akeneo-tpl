<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCachedFindAllEditableLocalesForUserService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Channel\Infrastructure\Query\Cache\CachedFindAllEditableLocalesForUser' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\Query\Cache\CachedFindAllEditableLocalesForUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/API/Query/FindAllEditableLocalesForUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cache/CachedQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Query/Cache/CachedFindAllEditableLocalesForUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Query/Sql/SqlFindAllEditableLocalesForUser.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Channel\\Infrastructure\\Query\\Cache\\CachedFindAllEditableLocalesForUser'])) {
            return $container->privates['Akeneo\\Channel\\Infrastructure\\Query\\Cache\\CachedFindAllEditableLocalesForUser'];
        }

        return $container->privates['Akeneo\\Channel\\Infrastructure\\Query\\Cache\\CachedFindAllEditableLocalesForUser'] = new \Akeneo\Channel\Infrastructure\Query\Cache\CachedFindAllEditableLocalesForUser(new \Akeneo\Channel\Infrastructure\Query\Sql\SqlFindAllEditableLocalesForUser($a));
    }
}
