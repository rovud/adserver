<?php

return [
    'storages' => [
        'items'  => [
            'mysql' => [
                'builder' => \Rovud\AdServer\Storage\Mysql\Builder::class,
            ],
            'file'  => [
                'builder' => \Rovud\AdServer\Storage\File\Builder::class,
            ]
        ],
        'active' => 'mysql',
    ],
];