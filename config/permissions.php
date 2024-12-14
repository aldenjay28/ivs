<?php
// config/permissions.php

return [
    'roles' => [
        'admin' => [
            'can_access' => [
                'dashboard',
                'manage_users',
                'manage_products',
                'manage_categories',
                'manage_suppliers',
                'manage_orders',
                'view_logs',
                'generate_reports',
            ],
        ],
        'user' => [
            'can_access' => [
                'dashboard',
                'orders',
                'inventory',
            ],
        ],
    ],
];
?>