<?php

namespace Rovud\AdServer\Storage\Mysql;

use Rovud\AdServer\Exception\InvalidArgumentException;
use Rovud\AdServer\Storage\StorageBuilderInterface;
use Rovud\AdServer\Storage\StorageInterface;

/**
 * Class Builder
 *
 * @package Rovud\AdServer\Storage\Mysql
 */
class Builder implements StorageBuilderInterface
{
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $db = 'ad';
    protected $pass = 'root';
    protected static $dbh = null;

    /**
     * @return StorageInterface|CampaignStorage
     * @throws InvalidArgumentException
     */
    public function buildStorage($target)
    {
        if (self::$dbh === null) {
            self::$dbh = new \PDO(sprintf('mysql:host=%s;dbname=%s', $this->host, $this->db), $this->user, $this->pass);
        }

        switch ($target) {
            case 'campaign':
                return new CampaignStorage(self::$dbh);
                break;
            case 'banner':
                return new BannerStorage(self::$dbh);
            default:
                throw new InvalidArgumentException('Required target does not exist');
        }
    }
}