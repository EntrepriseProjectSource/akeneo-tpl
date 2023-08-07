<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoBatchQueue_Manager_JobExecutionManagerService extends KernelProdContainer
{
    /*
     * Gets the private 'akeneo_batch_queue.manager.job_execution_manager' shared service.
     *
     * @return \Akeneo\Tool\Bundle\BatchQueueBundle\Manager\JobExecutionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchQueueBundle/Manager/JobExecutionManager.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['akeneo_batch_queue.manager.job_execution_manager'])) {
            return $container->privates['akeneo_batch_queue.manager.job_execution_manager'];
        }

        return $container->privates['akeneo_batch_queue.manager.job_execution_manager'] = new \Akeneo\Tool\Bundle\BatchQueueBundle\Manager\JobExecutionManager($a);
    }
}