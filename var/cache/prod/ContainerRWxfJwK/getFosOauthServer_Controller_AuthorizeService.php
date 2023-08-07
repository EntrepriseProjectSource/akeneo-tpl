<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Controller_AuthorizeService extends KernelProdContainer
{
    /*
     * Gets the public 'fos_oauth_server.controller.authorize' shared service.
     *
     * @return \FOS\OAuthServerBundle\Controller\AuthorizeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/oauth-server-bundle/Controller/AuthorizeController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/oauth-server-bundle/Form/Handler/AuthorizeFormHandler.php';

        $a = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $b = $container->load('getFosOauthServer_Authorize_FormService');

        return $container->services['fos_oauth_server.controller.authorize'] = new \FOS\OAuthServerBundle\Controller\AuthorizeController($a, $b, new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler($b, $a), ($container->privates['fos_oauth_server.server'] ?? $container->load('getFosOauthServer_ServerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['fos_oauth_server.client_manager.default'] ?? $container->load('getFosOauthServer_ClientManager_DefaultService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->services['.container.private.session'] ?? $container->load('get_Container_Private_SessionService')));
    }
}