<?php

namespace Akeneo\Tool\Bundle\ConnectorBundle\Doctrine;

use Akeneo\Tool\Component\StorageUtils\Cache\EntityManagerClearerInterface;
use Akeneo\Tool\Component\StorageUtils\Repository\CachedObjectRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Clear Doctrine's Unit of Work and all cached repositories registered here.
 * This is only used by bulk operations.
 *
 * For instance {@see \Akeneo\Pim\Enrichment\Component\Product\Connector\Writer\Database\ProductWriter} for more information.
 *
 * @author    Julien Janvier <j.janvier@gmail.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class UnitOfWorkAndRepositoriesClearer implements EntityManagerClearerInterface
{
    /** @var CachedObjectRepositoryInterface[] */
    protected $cachedRepositoriesToClear;

    /** @var EntityManagerInterface */
    protected $entityManager;

    /**
     * @param EntityManagerInterface            $entityManager
     * @param CachedObjectRepositoryInterface[] $cachedRepositoriesToClear
     */
    public function __construct(EntityManagerInterface $entityManager, array $cachedRepositoriesToClear)
    {
        $this->cachedRepositoriesToClear = $cachedRepositoriesToClear;
        $this->entityManager = $entityManager;
    }

    public function clear(): void
    {
        foreach ($this->cachedRepositoriesToClear as $repository) {
            $repository->clear();
        }

        $this->entityManager->clear();
    }
}
