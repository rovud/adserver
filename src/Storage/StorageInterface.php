<?php

namespace Rovud\AdServer\Storage;

/**
 * Interface StorageInterface
 *
 * @package Rovud\AdServer\Storage
 */
interface StorageInterface
{
    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function find($id);
}