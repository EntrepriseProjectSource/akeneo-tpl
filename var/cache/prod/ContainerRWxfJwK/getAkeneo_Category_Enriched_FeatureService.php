<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAkeneo_Category_Enriched_FeatureService extends KernelProdContainer
{
    /*
     * Gets the public 'akeneo.category.enriched.feature' shared service.
     *
     * @return \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['akeneo.category.enriched.feature'] = new \Akeneo\Platform\Bundle\FeatureFlagBundle\Configuration\EnvVarFeatureFlag($container->getEnv('bool:FLAG_ENRICHED_CATEGORY_ENABLED'));
    }
}