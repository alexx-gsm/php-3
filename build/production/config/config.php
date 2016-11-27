<?php

return [
    'domain' => '{{domain}}',
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'dbname' => 'php3_db',
            'user' => 'root',
            'password' => '{{db.password}}'
        ],
    ]
];