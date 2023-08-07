<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrateToUuidCommandService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidCommand' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidStep.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/Utils/StatusAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidCreateIndexes.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidAddTriggers.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidFillProductUuid.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidCleanGhostRecords.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidFillForeignUuid.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidFillJson.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidSetNotNullableUuidColumns.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidAddConstraints.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Command/MigrateToUuid/MigrateToUuidReindexElasticsearch.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());
        $b = ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService'));

        $container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Command\\MigrateToUuid\\MigrateToUuidCommand'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidCommand(new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidCreateIndexes($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidAddTriggers($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidFillProductUuid($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidCleanGhostRecords($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidFillForeignUuid($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidFillJson($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidSetNotNullableUuidColumns($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidAddConstraints($a, $b), new \Akeneo\Pim\Enrichment\Bundle\Command\MigrateToUuid\MigrateToUuidReindexElasticsearch($a, $b, ($container->services['akeneo_elasticsearch.client.product_and_product_model'] ?? $container->load('getAkeneoElasticsearch_Client_ProductAndProductModelService')), ($container->services['pim_catalog.elasticsearch.indexer.product'] ?? $container->load('getPimCatalog_Elasticsearch_Indexer_ProductService')), ($container->privates['Akeneo\\Pim\\Enrichment\\Bundle\\Storage\\Sql\\Product\\SqlFindProductUuids'] ?? $container->load('getSqlFindProductUuidsService'))), $b, $a);

        $instance->setName('pim:product:migrate-to-uuid');

        return $instance;
    }
}
