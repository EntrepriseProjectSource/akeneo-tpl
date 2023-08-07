<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimConnector_EventListener_JobExecutionAuthenticatorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_connector.event_listener.job_execution_authenticator' shared service.
     *
     * @return \Akeneo\Tool\Bundle\ConnectorBundle\EventListener\JobExecutionAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ConnectorBundle/EventListener/JobExecutionAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Security/JobUserProvider.php';

        $a = ($container->privates['pim_user.repository.user'] ?? $container->load('getPimUser_Repository_UserService'));

        if (isset($container->privates['pim_connector.event_listener.job_execution_authenticator'])) {
            return $container->privates['pim_connector.event_listener.job_execution_authenticator'];
        }

        return $container->privates['pim_connector.event_listener.job_execution_authenticator'] = new \Akeneo\Tool\Bundle\ConnectorBundle\EventListener\JobExecutionAuthenticator(new \Akeneo\UserManagement\Bundle\Security\JobUserProvider($a), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}