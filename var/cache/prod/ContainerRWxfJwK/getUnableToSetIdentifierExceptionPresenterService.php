<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnableToSetIdentifierExceptionPresenterService extends KernelProdContainer
{
    /*
     * Gets the private 'Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Presenter\UnableToSetIdentifierExceptionPresenter' shared service.
     *
     * @return \Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Presenter\UnableToSetIdentifierExceptionPresenter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/identifier-generator/back/src/API/Presenter/UnableToSetIdentifierExceptionPresenterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/components/identifier-generator/back/src/Infrastructure/Presenter/UnableToSetIdentifierExceptionPresenter.php';

        return $container->privates['Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Presenter\\UnableToSetIdentifierExceptionPresenter'] = new \Akeneo\Pim\Automation\IdentifierGenerator\Infrastructure\Presenter\UnableToSetIdentifierExceptionPresenter(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}