<?php

namespace Rovud\AdServer\Storage\Mysql;

use Rovud\AdServer\Storage\StorageInterface;

/**
 * Class Storage
 *
 * @package Rovud\AdServer\Storage\Mysql
 */
class Storage implements StorageInterface
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

}