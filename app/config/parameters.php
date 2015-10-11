<?php

return [
    'institution' => [
        'id'        => 414,
        'name'      => 'Filmoteca UNAM',
        'telephone' => '21579919',
        'email'     => 'contacto@filmoteca.unam.mx'
    ],
    'admin' => [
        'exhibition' => [
            'film' => [
                'min_year' => 1890
            ]
        ]
    ],
    'gtm'=> [
        'tracker-id' => 'UI-123456'
    ],
    'deploy' => [
        'defaults' => [
            'branch'            => 'master',
            'tmp-dir'           => '/tmp/deploy',
            'public-dir'        => 'htdocs',
            'repository-url'    => 'https://github.com/pollin14/filmoteca',
            'server-dir'        => '/vagrant/site',
            'server'            => '192.168.33.12',
            'user'              => 'vagrant',
            'project-name'      => 'filmoteca'
        ],
        'version' => [
            'file-name' => 'version.txt'
        ]
    ]
];
