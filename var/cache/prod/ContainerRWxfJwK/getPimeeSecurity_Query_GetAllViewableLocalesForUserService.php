<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimeeSecurity_Query_GetAllViewableLocalesForUserService extends KernelProdContainer
{
    /*
     * Gets the private 'pimee_security.query.get_all_viewable_locales_for_user' shared service.
     *
     * @return \Akeneo\Channel\Infrastructure\Query\Sql\SqlGetAllViewableLocalesForUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Component/Query/PublicApi/Permission/GetAllViewableLocalesForUserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Cache/CachedQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Channel/back/Infrastructure/Query/Sql/SqlGetAllViewableLocalesForUser.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['pimee_security.query.get_all_viewable_locales_for_user'])) {
            return $container->privates['pimee_security.query.get_all_viewable_locales_for_user'];
        }

        return $container->privates['pimee_security.query.get_all_viewable_locales_for_user'] = new \Akeneo\Channel\Infrastructure\Query\Sql\SqlGetAllViewableLocalesForUser($a);
    }
}
