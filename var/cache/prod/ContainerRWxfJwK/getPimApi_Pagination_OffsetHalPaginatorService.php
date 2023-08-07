<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimApi_Pagination_OffsetHalPaginatorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_api.pagination.offset_hal_paginator' shared service.
     *
     * @return \Akeneo\Tool\Component\Api\Pagination\OffsetHalPaginator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Pagination/PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/Api/Pagination/OffsetHalPaginator.php';

        return $container->privates['pim_api.pagination.offset_hal_paginator'] = new \Akeneo\Tool\Component\Api\Pagination\OffsetHalPaginator(($container->services['router'] ?? $container->getRouterService()));
    }
}