<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_21dAvoService extends KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.21dAvo_' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.21dAvo_'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['.messenger.method_on_object_wrapper.9.d.iGs'] ?? $container->load('get_Messenger_MethodOnObjectWrapper_9_D_IGsService')), ['method' => 'handleJobExecution']);
    }
}