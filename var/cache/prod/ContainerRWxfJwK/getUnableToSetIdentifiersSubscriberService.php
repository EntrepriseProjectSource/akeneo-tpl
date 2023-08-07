<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnableToSetIdentifiersSubscriberService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Subscriber\UnableToSetIdentifiersSubscriber' shared service.
     *
     * @return \Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Subscriber\UnableToSetIdentifiersSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/identifier-generator/back/src/API/Subscriber/UnableToSetIdentifiersSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/identifier-generator/back/src/Infrastructure/Subscriber/UnableToSetIdentifiersSubscriber.php';

        $a = ($container->privates['akeneo_batch.job_repository'] ?? $container->load('getAkeneoBatch_JobRepositoryService'));

        if (isset($container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Subscriber\\UnableToSetIdentifiersSubscriber'])) {
            return $container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Subscriber\\UnableToSetIdentifiersSubscriber'];
        }

        return $container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Subscriber\\UnableToSetIdentifiersSubscriber'] = new \Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Subscriber\UnableToSetIdentifiersSubscriber($a);
    }
}