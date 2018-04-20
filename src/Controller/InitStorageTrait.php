<?php

namespace Rovud\AdServer\Controller;

use Rovud\AdServer\Exception\InvalidArgumentException;
use Rovud\AdServer\Storage\StorageBuilderInterface;
use Rovud\AdServer\Storage\StorageInterface;

/**
 * Trait InitStorageTrait
 *
 * @package Rovud\AdServer\Controller
 */
trait InitStorageTrait
{
    protected function getStorage($target)
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/config.php';

        if (!isset($config['storages']) || !is_array($config['storages'])) {
            throw new InvalidArgumentException('"storages" array must be set in configuration');
        }

        if (empty($config['storages']['active'])) {
            throw new InvalidArgumentException('"storages" array must contain "active" option');
        }

        $active = $config['storages']['active'];
        $storages = $config['storages']['items'];

        if (isset($storages[$active])) {
            /** @var StorageBuilderInterface $builder */
            $builder = new $storages[$active]['builder'];
        }

        return $builder->buildStorage($target);
    }
}