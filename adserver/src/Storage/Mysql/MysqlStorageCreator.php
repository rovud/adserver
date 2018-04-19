<?php

namespace Rovud\AdServer\Storage\Mysql;

use Rovud\AdServer\Storage\MysqlStorageInterface;
use Rovud\AdServer\Storage\StorageCreator;
use Rovud\AdServer\Storage\StorageInterface;

/**
 * Class MysqlStorageCreator
 *
 * @package Rovud\AdServer\Storage\Mysql
 */
class MysqlStorageCreator implements StorageCreator
{
    /**
     * @return StorageInterface|MysqlStorageInterface
     */
    public static function createStorage()
    {
    }
}