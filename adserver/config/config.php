<?php

return [
    'storage' => [
        'creator' => \Rovud\AdServer\Storage\Mysql\MysqlStorageCreator::class,
        'config'  => [
            'host'     => 'localhost',
            'db'       => 'ads',
            'user'     => 'ads',
            'password' => 'ads',
        ],
//        'creator' => \Rovud\AdServer\Storage\File\FileStorageCreator::class,
//        'config' => [
//            'dir' => './Storage/File',
//        ],
    ],
];