<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimImportExport_Datagrid_Provider_JobService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_import_export.datagrid.provider.job' shared service.
     *
     * @return \Akeneo\Platform\Bundle\ImportExportBundle\Datagrid\JobDatagridProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/ImportExportBundle/Datagrid/JobDatagridProvider.php';

        return $container->services['pim_import_export.datagrid.provider.job'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Datagrid\JobDatagridProvider(($container->services['akeneo_batch.job.job_registry'] ?? $container->load('getAkeneoBatch_Job_JobRegistryService')));
    }
}
