<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Role Identifiers
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the role IDs for different types
    | of users within the application. These IDs can be set via environment
    | variables or default to empty strings.
    |
    */
    'admin_role_id' => env('ADMIN_ROLE_ID', ''),
    'superadmin_role_id' => env('SUPERADMIN_ROLE_ID', ''),
    'customer_role_id' => env('CUSTOMER_ROLE_ID', ''),
];