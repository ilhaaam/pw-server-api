<?php

return [

    /**
     * The IP of your machine the API will be connecting to.
     *
     * @var string
     */
    'server_ip' => setting('server.ip', '127.0.0.1'),

    /**
     * These ports MUST be open if you the package isn't on the host machine
     *
     * @var array
     */
    'ports' => [
        'client' => 29000,
        'gdeliveryd' => 29100,
        'gacd' => 29300,
        'gamedbd' => 29400
    ],

    /**
     * Your game version
     *
     * Available versions: 07, 63, 69, 70, 80, 85, 88, 101, 145, 156
     *
     * @var int
     */
    'game_version' => setting('server.version', '156'),

    'maxbuffer' => 65536,

    's_block' => FALSE,

    's_readtype' => 3,
];