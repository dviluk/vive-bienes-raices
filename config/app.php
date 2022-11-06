<?php

return [
    'mail_host' => env('MAIL_HOST'),
    'mail_port' => env('MAIL_PORT', '465'),
    'mail_username' => env('MAIL_USERNAME'),
    'mail_password' => env('MAIL_PASSWORD'),
    'mail_encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'mail_contact' => env('MAIL_CONTACT'),
    'mail_sentto' => env('MAIL_SENTTO'),
];