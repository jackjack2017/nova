<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Names, icons and urls for urls segments
    |--------------------------------------------------------------------------
    |
    | Set names, icons and urls for each admin url segment
    */

    'admin' => [
        'name' => 'dashboard',
        'icon' => 'dashboard',
        'url' => '/admin',
    ],

    'edit' =>
    [
        'name' => 'edition',
        'icon' => 'edit',
    ],
    'create' =>
    [
        'name' => 'creation',
        'icon' => 'edit'
    ],
    'notifications' =>
    [
        'name' => 'notifications',
        'icon' => 'bell',
        'url' => '#',
    ],
    'medias' =>
    [
        'name' => 'medias',
        'icon' => 'image',
        'url' => '#',
    ],
    'settings' =>
    [
        'name' => 'settings',
        'icon' => 'cog',
        'url' => '#',
    ],
    'categories' =>
    [
        'name' => 'categories',
        'icon' => 'list',
        'url' => '/admin/categories',
    ],
    'men' =>
        [
            'name' => 'men',
            'icon' => 'edit',
            'url' => '/admin/products/men',
        ],
    'products' =>
        [
            'name' => 'products',
            'icon' => 'list',
            'url' => '#',
        ],

];