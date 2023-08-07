<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_NPsQxWService extends KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.nPsQxW_' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->privates['Akeneo\\Catalogs\\Application\\Handler\\GetMappedProductsHandler'] ?? $container->load('getGetMappedProductsHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.nPsQxW_'])) {
            return $container->privates['.messenger.handler_descriptor.nPsQxW_'];
        }

        return $container->privates['.messenger.handler_descriptor.nPsQxW_'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, []);
    }
}