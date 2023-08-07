<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetAclCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Symfony\Bundle\AclBundle\Command\SetAclCommand' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\Command\SetAclCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src/Command/SetAclCommand.php';

        $container->privates['Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\SetAclCommand(($container->services['security.acl.provider'] ?? $container->load('getSecurity_Acl_ProviderService')));

        $instance->setName('acl:set');

        return $instance;
    }
}
