<?php

return [
    [
        'icon' => 'nav-icon fas fa-tachometer-alt',
        'route' => 'dashboard.dashboard',
        'title' => 'Dashboard',
        'active' => 'dashboard.dashboard.*',
    ], 
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.categories.index',
        'title' => 'Categories',
        'badge' => 'New',
        'active' => 'dashboard.categories.*',
    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.products.index',
        'title' => 'Products',
        'active' => 'dashboard.products.*',
    ],
    // [
    //     'icon' => 'far fa-circle nav-icon',
    //     'route' => 'dashboard.categories.index',
    //     'title' => 'Orders',
    //     'active' => 'dashboard.orders.*',

    // ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.hearing_articles.index',
        'title' => 'Blog',
        'active' => 'dashboard.hearing_articles.*',
    ],

    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.footer.edit',
        'title' => 'Footer',
        'active' => 'dashboard.footer.*',

    ],

    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.footer.edit',
        'title' => 'Users',
        'active' => 'dashboard.footer.*',

    ],
    [
        'icon' => 'nav-icon fas fa-cog',
        'route' => 'dashboard.footer.edit',
        'title' => 'Seting',
        'active' => 'dashboard.footer.*',

    ]
];