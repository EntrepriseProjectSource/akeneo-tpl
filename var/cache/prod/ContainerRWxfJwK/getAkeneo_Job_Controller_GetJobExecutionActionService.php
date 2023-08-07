<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Job_Controller_GetJobExecutionActionService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo.job.controller.get_job_execution_action' shared service.
     *
     * @return \Akeneo\Platform\Job\Infrastructure\Controller\GetJobExecutionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Controller/GetJobExecutionAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Application/SearchJobExecution/SearchJobExecutionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Application/SearchJobExecution/SearchJobExecutionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Query/SearchJobExecution.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Hydrator/JobExecutionRowHydrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Hydrator/JobExecutionTrackingHydrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Hydrator/StepExecutionTrackingHydrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Clock/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Job/back/Infrastructure/Clock/SystemClock.php';

        $a = ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService());

        return $container->services['akeneo.job.controller.get_job_execution_action'] = new \Akeneo\Platform\Job\Infrastructure\Controller\GetJobExecutionAction(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), $a, new \Akeneo\Platform\Job\Application\SearchJobExecution\SearchJobExecutionHandler(new \Akeneo\Platform\Job\Infrastructure\Query\SearchJobExecution(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), new \Akeneo\Platform\Job\Infrastructure\Hydrator\JobExecutionRowHydrator(new \Akeneo\Platform\Job\Infrastructure\Hydrator\JobExecutionTrackingHydrator(new \Akeneo\Platform\Job\Infrastructure\Hydrator\StepExecutionTrackingHydrator(new \Akeneo\Platform\Job\Infrastructure\Clock\SystemClock()))))), $a);
    }
}
