<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimUser_EntityWithImage_SubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_user.entity_with_image.subscriber' shared service.
     *
     * @return \Akeneo\UserManagement\Bundle\EventListener\UploadedImageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/EventListener/UploadedImageSubscriber.php';

        return $container->privates['pim_user.entity_with_image.subscriber'] = new \Akeneo\UserManagement\Bundle\EventListener\UploadedImageSubscriber((\dirname(__DIR__, 4).'/src'));
    }
}