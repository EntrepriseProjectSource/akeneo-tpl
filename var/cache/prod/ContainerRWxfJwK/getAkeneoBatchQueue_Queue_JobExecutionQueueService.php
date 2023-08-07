<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoBatchQueue_Queue_JobExecutionQueueService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo_batch_queue.queue.job_execution_queue' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchQueueBundle\Queue\MessengerJobExecutionQueue
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/BatchQueue/Queue/JobExecutionQueueInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchQueueBundle/Queue/MessengerJobExecutionQueue.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService'));

        if (isset($container->privates['akeneo_batch_queue.queue.job_execution_queue'])) {
            return $container->privates['akeneo_batch_queue.queue.job_execution_queue'];
        }

        return $container->privates['akeneo_batch_queue.queue.job_execution_queue'] = new \Akeneo\Tool\Bundle\BatchQueueBundle\Queue\MessengerJobExecutionQueue($a);
    }
}