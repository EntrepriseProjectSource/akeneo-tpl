<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoConnectivity_Client_EventsApiDebugService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo_connectivity.client.events_api_debug' shared service.
     *
     * @return \Akeneo\Tool\Bundle\ElasticsearchBundle\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ElasticsearchBundle/Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ElasticsearchBundle/IndexConfiguration/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ClientBuilder.php';

        return $container->services['akeneo_connectivity.client.events_api_debug'] = new \Akeneo\Tool\Bundle\ElasticsearchBundle\Client(($container->services['akeneo_elasticsearch.client_builder'] ?? ($container->services['akeneo_elasticsearch.client_builder'] = new \Elasticsearch\ClientBuilder())), new \Akeneo\Tool\Bundle\ElasticsearchBundle\IndexConfiguration\Loader($container->parameters['events_api_debug_elasticsearch_index_configuration_file'], ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)))), [0 => $container->getEnv('APP_INDEX_HOSTS')], $container->getEnv('APP_EVENTS_API_DEBUG_INDEX_NAME'), '', $container->getEnv('int:APP_ELASTICSEARCH_MAX_CHUNK_SIZE_CHARACTERS'), 1000, 3);
    }
}
