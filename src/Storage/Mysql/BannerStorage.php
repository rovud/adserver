<?php

namespace Rovud\AdServer\Storage\Mysql;

use Rovud\AdServer\Storage\StorageInterface;
use PDO;

/**
 * Class CampaignStorage
 *
 * @package Rovud\AdServer\Storage\Mysql
 */
class BannerStorage implements StorageInterface
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
        $stmt = $this->pdo->prepare('INSERT INTO banner (name, campaign_id, width, height, content) VALUES (:name, :campaign_id, :width, :height. :content)');
        $stmt->bindValue('name', $data->name);
        $stmt->bindValue('campaign_id', $data->campaign_id);
        $stmt->bindValue('width', $data->width);
        $stmt->bindValue('height', $data->height);
        $stmt->bindValue('content', $data->content);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare('UPDATE banner SET name = :name, campaign_id = :campaign_id, width = :width, height = :height, content = :content  WHERE id = :id');
        $stmt->bindValue('name', $data->name);
        $stmt->bindValue('id', $id);
        $stmt->bindValue('campaign_id', $data->campaign_id);
        $stmt->bindValue('width', $data->width);
        $stmt->bindValue('height', $data->height);
        $stmt->bindValue('content', $data->content);
        $stmt->execute();
    }

    public function delete($id)
    {
        $this->pdo->exec(sprintf('DELETE FROM banner WHERE id = %s', (int)$id));
    }

    public function find($id = null)
    {
        $sql = 'SELECT * FROM banner';

        if ($id !== null) {
            $sql .= sprintf(' WHERE id = %d LIMIT 1', (int)$id);
        }

        return $this->pdo->query($sql)->fetchAll();
    }

    public function findRecommended($width, $height)
    {
        $sql = sprintf('SELECT content FROM banner WHERE width = %d AND height = %d', (int)$width, (int)$height);
        $banners = $this->pdo->query($sql)->fetchAll();

        return array_rand($banners, 1);
    }
}