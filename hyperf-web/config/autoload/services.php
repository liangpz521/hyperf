<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'consumers' => [
        [
            'name' => 'UserService',
            'service' => App\JsonRpc\UserServiceInterface::class,
            'nodes' => [
                ['host' => '127.0.0.1', 'port' => 9502],
            ],
        ],
        [
            'name' => 'BrokerService',
            'service' => App\JsonRpc\BrokerServiceInterface::class,
            'nodes' => [
                ['host' => '127.0.0.1', 'port' => 9502],
            ],
        ],
    ],
];
