<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Updater_PropertyCopierService extends KernelProdContainer
{
    /*
     * Gets the public 'pim_catalog.updater.property_copier' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Updater\PropertyCopier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/StorageUtils/Updater/PropertyCopierInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/PropertyCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/CopierRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/CopierRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/CopierInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/AttributeCopierInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/AbstractAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/AttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/MediaAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/FileStorage/File/FileFetcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Component/FileStorage/File/FileFetcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/MetricAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/ReferenceDataAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/ReferenceDataCollectionAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Copier/HeterogeneousAttributeCopier.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Updater/Converter/ValueDataConverterRegistry.php';

        $a = ($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService'));
        $b = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\CopierRegistry($a);

        $c = ($container->privates['pim_catalog.builder.entity_with_values'] ?? $container->load('getPimCatalog_Builder_EntityWithValuesService'));
        $d = ($container->privates['pim_catalog.validator.helper.attribute'] ?? $container->load('getPimCatalog_Validator_Helper_AttributeService'));
        $e = ($container->privates['pim_standard_format_serializer'] ?? $container->load('getPimStandardFormatSerializerService'));
        $f = new \Akeneo\Tool\Component\FileStorage\File\FileFetcher();
        $g = ($container->privates['akeneo_file_storage.file_storage.file.file_storer'] ?? $container->load('getAkeneoFileStorage_FileStorage_File_FileStorerService'));
        $h = ($container->privates['akeneo_file_storage.file_storage.filesystem_provider'] ?? $container->load('getAkeneoFileStorage_FileStorage_FilesystemProviderService'));

        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_text'], [0 => 'pim_catalog_text']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\MediaAttributeCopier($c, $d, $f, $g, $h, [0 => 'pim_catalog_image'], [0 => 'pim_catalog_image']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\MediaAttributeCopier($c, $d, $f, $g, $h, [0 => 'pim_catalog_file'], [0 => 'pim_catalog_file']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_textarea'], [0 => 'pim_catalog_textarea']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_boolean'], [0 => 'pim_catalog_boolean']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_number'], [0 => 'pim_catalog_number']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_date'], [0 => 'pim_catalog_date']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\MetricAttributeCopier($c, $d, $e, [0 => 'pim_catalog_metric'], [0 => 'pim_catalog_metric']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_simpleselect'], [0 => 'pim_catalog_simpleselect']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_multiselect'], [0 => 'pim_catalog_multiselect']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\AttributeCopier($c, $d, $e, [0 => 'pim_catalog_price_collection'], [0 => 'pim_catalog_price_collection']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\ReferenceDataAttributeCopier($c, $d, [0 => 'pim_reference_data_simpleselect'], [0 => 'pim_reference_data_simpleselect']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\ReferenceDataCollectionAttributeCopier($c, $d, [0 => 'pim_reference_data_multiselect'], [0 => 'pim_reference_data_multiselect']));
        $b->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Copier\HeterogeneousAttributeCopier(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\ValueDataConverterRegistry(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['pim_catalog.updater.value_converter.string_to_string'] ?? ($container->privates['pim_catalog.updater.value_converter.string_to_string'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\StringToStringDataConverter()));
            yield 1 => ($container->privates['pim_catalog.updater.value_converter.number_to_string'] ?? ($container->privates['pim_catalog.updater.value_converter.number_to_string'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\NumberToStringDataConverter()));
            yield 2 => ($container->privates['pim_catalog.updater.value_converter.number_to_metric'] ?? ($container->privates['pim_catalog.updater.value_converter.number_to_metric'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\NumberToMetricDataConverter()));
            yield 3 => ($container->privates['pim_catalog.updater.value_converter.collection_to_string'] ?? ($container->privates['pim_catalog.updater.value_converter.collection_to_string'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\CollectionToStringDataConverter()));
            yield 4 => ($container->privates['pim_catalog.updater.value_converter.collection_to_array'] ?? ($container->privates['pim_catalog.updater.value_converter.collection_to_array'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\CollectionToArrayDataConverter()));
            yield 5 => ($container->privates['pim_catalog.updater.value_converter.date_to_string'] ?? ($container->privates['pim_catalog.updater.value_converter.date_to_string'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\DateToStringDataConverter()));
            yield 6 => ($container->privates['pim_catalog.updater.value_converter.metric_to_number'] ?? ($container->privates['pim_catalog.updater.value_converter.metric_to_number'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\MetricToNumberDataConverter()));
            yield 7 => ($container->privates['pim_catalog.updater.value_converter.metric_to_string'] ?? ($container->privates['pim_catalog.updater.value_converter.metric_to_string'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Converter\MetricToStringDataConverter()));
        }, 8)), ($container->privates['pim_catalog.builder.product'] ?? $container->load('getPimCatalog_Builder_ProductService')), $d));

        return $container->services['pim_catalog.updater.property_copier'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\PropertyCopier($a, $b);
    }
}
