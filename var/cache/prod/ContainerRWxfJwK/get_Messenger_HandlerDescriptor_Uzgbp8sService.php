<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Uzgbp8sService extends KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.uzgbp8s' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->privates['Akeneo\\Catalogs\\Application\\Handler\\UpdateProductMappingSchemaHandler'] ?? $container->load('getUpdateProductMappingSchemaHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.uzgbp8s'])) {
            return $container->privates['.messenger.handler_descriptor.uzgbp8s'];
        }

        return $container->privates['.messenger.handler_descriptor.uzgbp8s'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, []);
    }
}
