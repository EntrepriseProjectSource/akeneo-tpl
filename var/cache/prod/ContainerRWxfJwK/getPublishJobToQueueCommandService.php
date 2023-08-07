<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublishJobToQueueCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Tool\Bundle\BatchQueueBundle\Command\PublishJobToQueueCommand' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchQueueBundle\Command\PublishJobToQueueCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchQueueBundle/Command/PublishJobToQueueCommand.php';

        $container->privates['Akeneo\\Tool\\Bundle\\BatchQueueBundle\\Command\\PublishJobToQueueCommand'] = $instance = new \Akeneo\Tool\Bundle\BatchQueueBundle\Command\PublishJobToQueueCommand(($container->privates['akeneo_batch_queue.queue.publish_job_to_queue'] ?? $container->load('getAkeneoBatchQueue_Queue_PublishJobToQueueService')), ($container->privates['akeneo_batch.job_repository'] ?? $container->load('getAkeneoBatch_JobRepositoryService')), ($container->services['akeneo_batch.job.job_registry'] ?? $container->load('getAkeneoBatch_Job_JobRegistryService')), ($container->privates['akeneo_batch.job_parameters_factory'] ?? $container->load('getAkeneoBatch_JobParametersFactoryService')), 'Akeneo\\Tool\\Component\\Batch\\Model\\JobInstance');

        $instance->setName('akeneo:batch:publish-job-to-queue');

        return $instance;
    }
}