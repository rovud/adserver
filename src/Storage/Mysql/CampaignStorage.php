<?php

namespace Rovud\AdServer\Storage\Mysql;

use Rovud\AdServer\Storage\StorageInterface;
use PDO;

/**
 * Class CampaignStorage
 *
 * @package Rovud\AdServer\Storage\Mysql
 */
class CampaignStorage implements StorageInterface
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * CampaignStorage constructor.
     *
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO campaign (name) VALUES (:name)');
        $stmt->bindValue('name', $data->name);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare('UPDATE campaign SET name = :name WHERE id = :id');
        $stmt->bindValue('name', $data->name);
        $stmt->bindValue('id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $this->pdo->exec(sprintf('DELETE FROM campaign WHERE id = %s', (int)$id));
    }

    public function find($id = null)
    {
        $sql = 'SELECT * FROM campaign';

        if ($id !== null) {
            $sql .= sprintf(' WHERE id = %d LIMIT 1', (int)$id);
        }

        return $this->pdo->query($sql)->fetchAll();
    }
}