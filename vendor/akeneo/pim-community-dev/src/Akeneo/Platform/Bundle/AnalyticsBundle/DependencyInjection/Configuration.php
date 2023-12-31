<?php

namespace Akeneo\Platform\Bundle\AnalyticsBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('pim_notification');
        $rootNode = $treeBuilder->getRootNode()
            ->children()
                ->booleanNode('version_update')
                    ->defaultTrue()
                ->end()
            ->end();

        SettingsBuilder::append($rootNode, ['version_update' => ['value' => true]]);

        return $treeBuilder;
    }
}
