<?php

namespace Akeneo\Platform\Bundle\UIBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Some presentation filters
 *
 * @author    Clement Gautier <clement.gautier@akeneo.com>
 * @copyright 2016 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class StyleExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('highlight', [$this, 'highlight'])
        ];
    }

    /**
     * Return a string wrapper in a span with a specific class
     *
     * @param string $content
     *
     * @return string
     */
    public function highlight($content)
    {
        return sprintf('<span class="AknRule-attribute">%s</span>', $content);
    }
}
