<?php

return [
    'secret' => env('GOOGLERECAPTCHA_SECRET'),
    'sitekey' => env('GOOGLERECAPTCHA_SITEKEY'),
    'options' => [
        'timeout' => 30,
    ],
];
