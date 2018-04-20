<?php

namespace Rovud\AdServer\Storage;

/**
 * Interface StorageBuilderInterface
 *
 * @package Rovud\AdServer\Storage
 */
interface StorageBuilderInterface
{
    /**
     * @param string $target
     *
     * @return StorageInterface
     */
    public function buildStorage($target);
}