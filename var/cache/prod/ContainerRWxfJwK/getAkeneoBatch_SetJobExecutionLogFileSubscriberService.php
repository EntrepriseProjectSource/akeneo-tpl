<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoBatch_SetJobExecutionLogFileSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo_batch.set_job_execution_log_file_subscriber' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchBundle\EventListener\SetJobExecutionLogFileSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/EventListener/SetJobExecutionLogFileSubscriber.php';

        return $container->privates['akeneo_batch.set_job_execution_log_file_subscriber'] = new \Akeneo\Tool\Bundle\BatchBundle\EventListener\SetJobExecutionLogFileSubscriber(($container->privates['akeneo_batch.logger.batch_log_handler'] ?? $container->load('getAkeneoBatch_Logger_BatchLogHandlerService')));
    }
}