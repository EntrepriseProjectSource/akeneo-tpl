<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRefreshConnectedAppActionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\RefreshConnectedAppAction' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\RefreshConnectedAppAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Controller/Internal/RefreshConnectedAppAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Apps/Command/RefreshConnectedAppHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Domain/Apps/Persistence/UpdateConnectedAppDescriptionQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Infrastructure/Apps/Persistence/UpdateConnectedAppDescriptionQuery.php';

        return $container->services['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\RefreshConnectedAppAction'] = new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Controller\Internal\RefreshConnectedAppAction(($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Persistence\\FindOneConnectedAppByConnectionCodeQuery'] ?? $container->load('getFindOneConnectedAppByConnectionCodeQueryService')), new \Akeneo\Connectivity\Connection\Application\Apps\Command\RefreshConnectedAppHandler(new \Akeneo\Connectivity\Connection\Infrastructure\Apps\Persistence\UpdateConnectedAppDescriptionQuery(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Persistence\\FindOneConnectedAppByIdQuery'] ?? $container->load('getFindOneConnectedAppByIdQueryService')), ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Persistence\\GetAppQuery'] ?? $container->load('getGetAppQueryService')), ($container->privates['pim_user.repository.user'] ?? $container->load('getPimUser_Repository_UserService')), ($container->privates['pim_user.updater.user'] ?? $container->load('getPimUser_Updater_UserService')), ($container->privates['pim_user.saver.user'] ?? $container->load('getPimUser_Saver_UserService'))));
    }
}