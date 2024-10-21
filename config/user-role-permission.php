<?php

return [

    'default_roles' => [
        'admin',
        'editor',
        'viewer',
    ],

    'default_permissions' => [
        'create',
        'read',
        'update',
        'delete',
    ],

    'tables' => [
        'roles' => 'roles',
        'permissions' => 'permissions',
        'role_user' => 'role_user',
        'permission_role' => 'permission_role',
    ],

];
