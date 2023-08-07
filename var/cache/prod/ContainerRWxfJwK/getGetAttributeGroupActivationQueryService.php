<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAttributeGroupActivationQueryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Structure\GetAttributeGroupActivationQuery' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Structure\GetAttributeGroupActivationQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Domain/Query/Structure/GetAttributeGroupActivationQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Persistence/Query/Structure/GetAttributeGroupActivationQuery.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\Structure\\GetAttributeGroupActivationQuery'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\Structure\\GetAttributeGroupActivationQuery'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Query\\Structure\\GetAttributeGroupActivationQuery'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Persistence\Query\Structure\GetAttributeGroupActivationQuery($a);
    }
}