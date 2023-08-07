<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGpsTransportFactoryService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Tool\Bundle\MessengerBundle\Transport\GooglePubSub\GpsTransportFactory' shared service.
     *
     * @return \Akeneo\Tool\Bundle\MessengerBundle\Transport\GooglePubSub\GpsTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MessengerBundle/Transport/GooglePubSub/GpsTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MessengerBundle/Transport/GooglePubSub/PubSubClientFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Tool/Bundle/MessengerBundle/Ordering/OrderingKeySolver.php';

        return $container->privates['Akeneo\\Tool\\Bundle\\MessengerBundle\\Transport\\GooglePubSub\\GpsTransportFactory'] = new \Akeneo\Tool\Bundle\MessengerBundle\Transport\GooglePubSub\GpsTransportFactory(new \Akeneo\Tool\Bundle\MessengerBundle\Transport\GooglePubSub\PubSubClientFactory($container->getEnv('string:SRNT_GOOGLE_APPLICATION_CREDENTIALS')), new \Akeneo\Tool\Bundle\MessengerBundle\Ordering\OrderingKeySolver(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['akeneo_batch_queue.ordering_key.resolver.job_message'] ?? ($container->privates['akeneo_batch_queue.ordering_key.resolver.job_message'] = new \Akeneo\Tool\Bundle\MessengerBundle\Ordering\ClassOrderingKeyResolver('Akeneo\\Tool\\Component\\BatchQueue\\Queue\\JobExecutionMessage', 'job_key')));
        }, 1)));
    }
}