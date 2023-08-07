<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoCommunicationChannel_InternalApi_Announcement_AddViewedAnnouncementsService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo_communication_channel.internal_api.announcement.add_viewed_announcements' shared service.
     *
     * @return \Akeneo\Platform\CommunicationChannel\Infrastructure\Delivery\InternalApi\Announcement\AddViewedAnnouncementsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CommunicationChannelBundle/back/Infrastructure/Delivery/InternalApi/Announcement/AddViewedAnnouncementsAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CommunicationChannelBundle/back/Application/Announcement/Command/AddViewedAnnouncementsByUserHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CommunicationChannelBundle/back/Domain/Announcement/Repository/ViewedAnnouncementRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/CommunicationChannelBundle/back/Infrastructure/Persistence/Dbal/Repository/DbalViewedAnnouncementRepository.php';

        return $container->services['akeneo_communication_channel.internal_api.announcement.add_viewed_announcements'] = new \Akeneo\Platform\CommunicationChannel\Infrastructure\Delivery\InternalApi\Announcement\AddViewedAnnouncementsAction(($container->services['pim_user.context.user'] ?? $container->getPimUser_Context_UserService()), new \Akeneo\Platform\CommunicationChannel\Application\Announcement\Command\AddViewedAnnouncementsByUserHandler(new \Akeneo\Platform\CommunicationChannel\Infrastructure\Persistence\Dbal\Repository\DbalViewedAnnouncementRepository(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()))));
    }
}
