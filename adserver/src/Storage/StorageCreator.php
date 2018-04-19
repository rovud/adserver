<?php

namespace Rovud\AdServer\Storage;

/**
 * Interface StorageCreator
 *
 * @package Rovud\AdServer\Storage
 */
interface StorageCreator
{
    /**
     * @param array  $config
     * @param string $target
     *
     * @return StorageInterface
     */
    public function createStorage(array $config, $target);
}