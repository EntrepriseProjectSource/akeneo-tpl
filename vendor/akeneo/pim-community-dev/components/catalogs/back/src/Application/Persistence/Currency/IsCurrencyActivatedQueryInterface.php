<?php

declare(strict_types=1);

namespace Akeneo\Catalogs\Application\Persistence\Currency;

/**
 * @author    Willy Mesnage <willy.mesnage@akeneo.com>
 * @copyright 2022 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface IsCurrencyActivatedQueryInterface
{
    public function execute(string $code): bool;
}
