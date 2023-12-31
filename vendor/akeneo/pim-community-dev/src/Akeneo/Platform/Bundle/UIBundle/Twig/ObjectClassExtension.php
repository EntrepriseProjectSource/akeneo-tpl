<?php

namespace Akeneo\Platform\Bundle\UIBundle\Twig;

use Doctrine\Common\Util\ClassUtils;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Twig filter to get entity FQCN
 *
 * @author    Filips Alpe <filips@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ObjectClassExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('class', array($this, 'getClass')),
        ];
    }

    /**
     * Get entity class name
     *
     * @param object $entity
     *
     * @return string
     */
    public function getClass($entity)
    {
        return ClassUtils::getClass($entity);
    }
}
