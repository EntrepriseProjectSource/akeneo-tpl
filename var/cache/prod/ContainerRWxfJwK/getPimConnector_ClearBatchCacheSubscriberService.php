<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimConnector_ClearBatchCacheSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_connector.clear_batch_cache_subscriber' shared service.
     *
     * @return \Akeneo\Tool\Bundle\ConnectorBundle\EventListener\ClearBatchCacheSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/ConnectorBundle/EventListener/ClearBatchCacheSubscriber.php';

        $a = ($container->privates['pim_connector.doctrine.cache_clearer'] ?? $container->load('getPimConnector_Doctrine_CacheClearerService'));

        if (isset($container->privates['pim_connector.clear_batch_cache_subscriber'])) {
            return $container->privates['pim_connector.clear_batch_cache_subscriber'];
        }

        return $container->privates['pim_connector.clear_batch_cache_subscriber'] = new \Akeneo\Tool\Bundle\ConnectorBundle\EventListener\ClearBatchCacheSubscriber($a);
    }
}
