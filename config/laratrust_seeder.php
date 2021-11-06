<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'a,s,e,d',
            'profile' => 's,e'
        ],
        'faculty' => [
            'users' => 'a,s,e,d',
            'profile' => 's,e'
        ],
        'user' => [
            'profile' => 's,e',
        ]
    ],

    'permissions_map' => [
        'a' => 'add',
        's' => 'show',
        'e' => 'edit',
        'd' => 'destroy'
    ]
];
