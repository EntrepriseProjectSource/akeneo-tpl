<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Datagrid_Request_ParametersExtractorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_datagrid.datagrid.request.parameters_extractor' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Datagrid\Request\RequestParametersExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Request/RequestParametersExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Datagrid/Request/RequestParametersExtractor.php';

        return $container->privates['pim_datagrid.datagrid.request.parameters_extractor'] = new \Oro\Bundle\PimDataGridBundle\Datagrid\Request\RequestParametersExtractor(($container->privates['oro_datagrid.datagrid.request_params'] ?? $container->load('getOroDatagrid_Datagrid_RequestParamsService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}