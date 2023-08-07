<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoBatchQueue_Queue_PublishJobToQueueService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo_batch_queue.queue.publish_job_to_queue' shared service.
     *
     * @return \Akeneo\Tool\Component\BatchQueue\Queue\PublishJobToQueue
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/BatchQueue/Queue/PublishJobToQueueInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/BatchQueue/Queue/PublishJobToQueue.php';

        return $container->privates['akeneo_batch_queue.queue.publish_job_to_queue'] = new \Akeneo\Tool\Component\BatchQueue\Queue\PublishJobToQueue('prod', ($container->privates['akeneo_batch.job_repository'] ?? $container->load('getAkeneoBatch_JobRepositoryService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['akeneo_batch_queue.queue.job_execution_queue'] ?? $container->load('getAkeneoBatchQueue_Queue_JobExecutionQueueService')), ($container->privates['akeneo_batch_queue.factory.job_execution_message'] ?? $container->load('getAkeneoBatchQueue_Factory_JobExecutionMessageService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['akeneo_batch.logger.batch_log_handler'] ?? $container->load('getAkeneoBatch_Logger_BatchLogHandlerService')), ($container->privates['Akeneo\\Tool\\Bundle\\BatchBundle\\JobExecution\\CreateJobExecutionHandlerInterface'] ?? $container->load('getCreateJobExecutionHandlerInterfaceService')));
    }
}
