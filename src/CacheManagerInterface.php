<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Cache;

use Sonata\Cache\Invalidation\Recorder;

interface CacheManagerInterface
{
    /**
     * Adds a cache service.
     *
     * @param string                $name         A cache name
     * @param CacheAdapterInterface $cacheManager A cache service
     */
    public function addCacheService(string $name, CacheAdapterInterface $cacheManager): void;

    /**
     * Gets a cache service by a given name.
     *
     * @param string $name A cache name
     *
     * @return CacheAdapterInterface
     */
    public function getCacheService(string $name): CacheAdapterInterface;

    /**
     * Returns related cache services.
     *
     * @return array
     */
    public function getCacheServices(): array;

    /**
     * Returns TRUE whether a cache service identified by id exists.
     *
     * @param string $id
     *
     * @return bool
     */
    public function hasCacheService(string $id): bool;

    /**
     * Invalidates the cache by the given keys.
     *
     * @param array $keys
     */
    public function invalidate(array $keys): void;

    /**
     * Sets the recorder.
     *
     * @param Recorder $recorder
     */
    public function setRecorder(Recorder $recorder): void;

    /**
     * Gets the recorder.
     *
     * @return Recorder
     */
    public function getRecorder(): Recorder;
}
