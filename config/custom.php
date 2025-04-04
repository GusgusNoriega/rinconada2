<?php

return [
    'webhook-secret' => env('WEBHOOK_SECRET'),
    'niubiz' => [
        'username' => env('NIUBIZ_USERNAME'),
        'password' => env('NIUBIZ_PASSWORD'),
        'merchant_id' => env('NIUBIZ_MERCHANT_ID'),
        'api_url' => env('NIUBIZ_API_URL', 'https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/'),
        'security_url' => env('NIUBIZ_SECURITY_URL', 'https://apisandbox.vnforappstest.com/api.security/v1/security'),
    ],
];
