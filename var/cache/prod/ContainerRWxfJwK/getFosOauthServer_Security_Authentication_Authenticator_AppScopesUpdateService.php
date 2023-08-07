<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Security_Authentication_Authenticator_AppScopesUpdateService extends KernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.security.authentication.authenticator.app_scopes_update' shared service.
     *
     * @return \FOS\OAuthServerBundle\Security\Authentication\Authenticator\OAuthAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/oauth-server-bundle/Security/Authentication/Authenticator/OAuthAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Provider/CustomUserChecker.php';

        $a = ($container->privates['fos_oauth_server.server'] ?? $container->load('getFosOauthServer_ServerService'));

        if (isset($container->privates['fos_oauth_server.security.authentication.authenticator.app_scopes_update'])) {
            return $container->privates['fos_oauth_server.security.authentication.authenticator.app_scopes_update'];
        }

        return $container->privates['fos_oauth_server.security.authentication.authenticator.app_scopes_update'] = new \FOS\OAuthServerBundle\Security\Authentication\Authenticator\OAuthAuthenticator($a, ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Akeneo\UserManagement\Bundle\Provider\CustomUserChecker())), ($container->privates['pim_user.provider.user_api'] ?? $container->load('getPimUser_Provider_UserApiService')));
    }
}