<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetViewableCategoriesService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Category\API\Query\GetViewableCategories' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Category\Infrastructure\Query\SqlGetExistingCategories
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Category/back/API/Query/GetViewableCategories.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Category/back/Infrastructure/Query/SqlGetExistingCategories.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['Akeneo\\Pim\\Enrichment\\Category\\API\\Query\\GetViewableCategories'])) {
            return $container->privates['Akeneo\\Pim\\Enrichment\\Category\\API\\Query\\GetViewableCategories'];
        }

        return $container->privates['Akeneo\\Pim\\Enrichment\\Category\\API\\Query\\GetViewableCategories'] = new \Akeneo\Pim\Enrichment\Category\Infrastructure\Query\SqlGetExistingCategories($a);
    }
}