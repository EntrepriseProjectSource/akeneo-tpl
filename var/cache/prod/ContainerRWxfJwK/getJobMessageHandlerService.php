<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobMessageHandlerService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Tool\Bundle\BatchQueueBundle\MessageHandler\JobMessageHandler' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchQueueBundle\MessageHandler\JobMessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchQueueBundle/MessageHandler/JobMessageHandler.php';

        $a = new \Symfony\Bridge\Monolog\Logger('job_queue');
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        return $container->privates['Akeneo\\Tool\\Bundle\\BatchQueueBundle\\MessageHandler\\JobMessageHandler'] = new \Akeneo\Tool\Bundle\BatchQueueBundle\MessageHandler\JobMessageHandler($a, \dirname(__DIR__, 4));
    }
}
