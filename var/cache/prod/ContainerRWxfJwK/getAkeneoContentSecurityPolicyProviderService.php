<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoContentSecurityPolicyProviderService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Platform\Bundle\UIBundle\Provider\ContentSecurityPolicy\AkeneoContentSecurityPolicyProvider' shared service.
     *
     * @return \Akeneo\Platform\Bundle\UIBundle\Provider\ContentSecurityPolicy\AkeneoContentSecurityPolicyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Provider/ContentSecurityPolicy/ContentSecurityPolicyProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Provider/ContentSecurityPolicy/AkeneoContentSecurityPolicyProvider.php';

        return $container->privates['Akeneo\\Platform\\Bundle\\UIBundle\\Provider\\ContentSecurityPolicy\\AkeneoContentSecurityPolicyProvider'] = new \Akeneo\Platform\Bundle\UIBundle\Provider\ContentSecurityPolicy\AkeneoContentSecurityPolicyProvider(($container->privates['security.script_nonce_generator'] ?? $container->load('getSecurity_ScriptNonceGeneratorService')));
    }
}