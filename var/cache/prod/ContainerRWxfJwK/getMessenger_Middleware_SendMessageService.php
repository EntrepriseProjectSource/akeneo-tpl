<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends KernelProdContainer
{
    /*
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.KxSSRhz'] ?? $container->load('get_ServiceLocator_KxSSRhzService'));

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }

        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Akeneo\\Platform\\Component\\EventQueue\\Event' => [0 => 'webhook'], 'Akeneo\\Platform\\Component\\EventQueue\\BulkEvent' => [0 => 'webhook'], 'Akeneo\\Tool\\Component\\BatchQueue\\Queue\\UiJobExecutionMessage' => [0 => 'ui_job'], 'Akeneo\\Tool\\Component\\BatchQueue\\Queue\\ImportJobExecutionMessage' => [0 => 'import_export_job'], 'Akeneo\\Tool\\Component\\BatchQueue\\Queue\\ExportJobExecutionMessage' => [0 => 'import_export_job'], 'Akeneo\\Tool\\Component\\BatchQueue\\Queue\\DataMaintenanceJobExecutionMessage' => [0 => 'data_maintenance_job'], 'Akeneo\\Tool\\Component\\BatchQueue\\Queue\\ScheduledJobMessage' => [0 => 'scheduled_job']], $a), $b);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
