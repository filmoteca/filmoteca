<?php

return [
    'driver' => 'log',
    'pretend' => false,
    'from' => [
        'address' => 'filmoteca@unam.mx',
        'name' => 'Filmoteca'
    ],
    'error' => [
        'address' => 'mail_address_to_notify_some_error@unam.mx',
        'subject' => 'Error Notification'
    ]
];
