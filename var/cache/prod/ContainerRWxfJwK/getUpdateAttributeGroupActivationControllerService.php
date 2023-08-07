<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateAttributeGroupActivationControllerService extends KernelProdContainer
{
    /*
     * Gets the public 'Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\UpdateAttributeGroupActivationController' shared service.
     *
     * @return \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\UpdateAttributeGroupActivationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Automation/DataQualityInsights/back/Infrastructure/Symfony/Controller/UpdateAttributeGroupActivationController.php';

        return $container->services['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\UpdateAttributeGroupActivationController'] = new \Akeneo\Pim\Automation\DataQualityInsights\Infrastructure\Symfony\Controller\UpdateAttributeGroupActivationController(($container->privates['Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Persistence\\Repository\\AttributeGroupActivationRepository'] ?? $container->load('getAttributeGroupActivationRepositoryService')), ($container->privates['oro_security.security_facade'] ?? $container->getOroSecurity_SecurityFacadeService()));
    }
}
