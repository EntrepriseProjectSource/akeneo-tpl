<?php

declare(strict_types=1);

namespace Akeneo\Catalogs\ServiceAPI\Events;

/**
 * @author    Willy Mesnage <willy.mesnage@akeneo.com>
 * @copyright 2022 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
final class InvalidCatalogDisabledEvent
{
    public function __construct(
        private string $catalogId,
    ) {
    }

    public function getCatalogId(): string
    {
        return $this->catalogId;
    }
}
