<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSettingsControllerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Platform\Bundle\UIBundle\Controller\SettingsController' shared service.
     *
     * @return \Akeneo\Platform\Bundle\UIBundle\Controller\SettingsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Controller/SettingsController.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Query/CountSettingsEntitiesQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Query/Sql/CountSettingsEntitiesQuery.php';

        return $container->services['Akeneo\\Platform\\Bundle\\UIBundle\\Controller\\SettingsController'] = new \Akeneo\Platform\Bundle\UIBundle\Controller\SettingsController(new \Akeneo\Platform\Bundle\UIBundle\Query\Sql\CountSettingsEntitiesQuery(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService())), NULL);
    }
}