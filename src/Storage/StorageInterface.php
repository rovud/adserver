<?php

namespace AdServer\Storage;

/**
 * Interface StorageInterface
 *
 * @package AdServer\Storage
 */
interface StorageInterface
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int   $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(int $id, array $data);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function find(int $id);
}