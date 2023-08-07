<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneoElasticsearch_ClientBuilderService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo_elasticsearch.client_builder' shared service.
     *
     * @return \Elasticsearch\ClientBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ClientBuilder.php';

        return $container->services['akeneo_elasticsearch.client_builder'] = new \Elasticsearch\ClientBuilder();
    }
}