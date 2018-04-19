<?php

namespace Rovud\AdServer\Storage\File;

use Rovud\AdServer\Storage\StorageInterface as StorageInterface;

/**
 * Class Storage
 *
 * @package Rovud\AdServer\Storage\File
 */
class StorageInterface implements StorageInterface
{
    /**
     * @var
     */
    protected $fileHandler;

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