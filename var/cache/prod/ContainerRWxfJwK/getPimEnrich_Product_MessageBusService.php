<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimEnrich_Product_MessageBusService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_enrich.product.message_bus' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Product\API\CommandMessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Product/back/API/CommandMessageBus.php';

        return $container->privates['pim_enrich.product.message_bus'] = new \Akeneo\Pim\Enrichment\Product\API\CommandMessageBus(new RewindableGenerator(function () use ($container) {
            yield 'Akeneo\\Pim\\Enrichment\\Product\\API\\Command\\UpsertProductCommand' => ($container->privates['Akeneo\\Pim\\Enrichment\\Product\\Application\\UpsertProductHandler'] ?? $container->load('getUpsertProductHandlerService'));
        }, 1));
    }
}
