<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionMustExistValidatorService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Connectivity\Connection\Application\Webhook\Validation\ConnectionMustExistValidator' shared service.
     *
     * @return \Akeneo\Connectivity\Connection\Application\Webhook\Validation\ConnectionMustExistValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Connectivity/Connection/back/Application/Webhook/Validation/ConnectionMustExistValidator.php';

        $a = ($container->privates['Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Persistence\\DbalConnectionRepository'] ?? $container->load('getDbalConnectionRepositoryService'));

        if (isset($container->privates['Akeneo\\Connectivity\\Connection\\Application\\Webhook\\Validation\\ConnectionMustExistValidator'])) {
            return $container->privates['Akeneo\\Connectivity\\Connection\\Application\\Webhook\\Validation\\ConnectionMustExistValidator'];
        }

        return $container->privates['Akeneo\\Connectivity\\Connection\\Application\\Webhook\\Validation\\ConnectionMustExistValidator'] = new \Akeneo\Connectivity\Connection\Application\Webhook\Validation\ConnectionMustExistValidator($a);
    }
}