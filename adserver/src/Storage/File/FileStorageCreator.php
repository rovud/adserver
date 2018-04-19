<?php

namespace Rovud\AdServer\Storage\File;

use Rovud\AdServer\Storage\FileStorageInterface;
use Rovud\AdServer\Storage\StorageCreator;
use Rovud\AdServer\Storage\StorageInterface;

/**
 * Class FileStorageCreator
 *
 * @package Rovud\AdServer\Storage\File
 */
class FileStorageCreator extends StorageCreator
{
    /**
     * @return StorageInterface|FileStorageInterface
     */
    public static function createStorage()
    {

    }
}