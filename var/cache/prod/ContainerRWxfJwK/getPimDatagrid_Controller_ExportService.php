<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimDatagrid_Controller_ExportService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_datagrid.controller.export' shared service.
     *
     * @return \Oro\Bundle\PimDataGridBundle\Controller\ExportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Controller/ExportController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';

        return $container->services['pim_datagrid.controller.export'] = new \Oro\Bundle\PimDataGridBundle\Controller\ExportController(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['pim_datagrid.extension.mass_action.dispatcher'] ?? $container->load('getPimDatagrid_Extension_MassAction_DispatcherService')), new \Symfony\Component\Serializer\Serializer([0 => ($container->privates['pim_import_export.normalizer.job_execution'] ?? $container->load('getPimImportExport_Normalizer_JobExecutionService')), 1 => ($container->privates['pim_import_export.normalizer.step_execution'] ?? $container->load('getPimImportExport_Normalizer_StepExecutionService'))], [0 => ($container->privates['serializer.encoder.json'] ?? ($container->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder()))]));
    }
}