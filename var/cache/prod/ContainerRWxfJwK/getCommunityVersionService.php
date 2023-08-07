<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommunityVersionService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Platform\Bundle\PimVersionBundle\Version\CommunityVersion' shared service.
     *
     * @return \Akeneo\Platform\Bundle\PimVersionBundle\Version\CommunityVersion
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/PimVersionBundle/Version/PimVersion.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/PimVersionBundle/Version/CommunityVersion.php';

        return $container->services['Akeneo\\Platform\\Bundle\\PimVersionBundle\\Version\\CommunityVersion'] = new \Akeneo\Platform\Bundle\PimVersionBundle\Version\CommunityVersion();
    }
}