<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateJobInstanceHandlerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Platform\Job\Application\CreateJobInstanceHandler' shared service.
     *
     * @return \Akeneo\Platform\Job\Application\CreateJobInstanceHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/ServiceApi/JobInstance/CreateJobInstance/CreateJobInstanceHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Application/CreateJobInstanceHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/BatchBundle/Job/JobInstanceFactory.php';

        return $container->services['Akeneo\\Platform\\Job\\Application\\CreateJobInstanceHandler'] = new \Akeneo\Platform\Job\Application\CreateJobInstanceHandler(($container->privates['akeneo_batch.job_instance_factory'] ?? ($container->privates['akeneo_batch.job_instance_factory'] = new \Akeneo\Tool\Bundle\BatchBundle\Job\JobInstanceFactory('Akeneo\\Tool\\Component\\Batch\\Model\\JobInstance'))), ($container->services['akeneo_batch.job.job_registry'] ?? $container->load('getAkeneoBatch_Job_JobRegistryService')), ($container->privates['akeneo_batch.job_parameters_factory'] ?? $container->load('getAkeneoBatch_JobParametersFactoryService')), ($container->privates['akeneo_batch.job.job_parameters_validator'] ?? $container->load('getAkeneoBatch_Job_JobParametersValidatorService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')), ($container->privates['akeneo_batch.saver.job_instance'] ?? $container->load('getAkeneoBatch_Saver_JobInstanceService')));
    }
}
