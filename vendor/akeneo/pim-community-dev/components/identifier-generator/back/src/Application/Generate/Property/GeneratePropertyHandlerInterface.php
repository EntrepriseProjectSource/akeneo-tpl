<?php

declare(strict_types=1);

namespace Akeneo\Pim\Automation\IdentifierGenerator\Application\Generate\Property;

use Akeneo\Pim\Automation\IdentifierGenerator\Domain\Model\Property\PropertyInterface;
use Akeneo\Pim\Automation\IdentifierGenerator\Domain\Model\Target;

/**
 * @copyright 2022 Akeneo SAS (https://www.akeneo.com)
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface GeneratePropertyHandlerInterface
{
    public function getPropertyClass(): string;

    public function __invoke(PropertyInterface $freeText, Target $target, string $prefix): string;
}
