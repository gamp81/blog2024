<?php

return [
    'disk' => env('BLOG_DISK', 'public'),
    'system_key' => [
        'blog_name',
        'motto',
        'title',
        'seo_keyword',
        'seo_desc',
        'icp',
        'github_url',
        'weibo_url',
        'disqus_short_name',
        'comment_plugin',
        'statistics_script'
    ],
    'menu' => [
        [
            'backend.home' => [
                'icon'  => 'fa fa-home',
                'name'  => 'Home'
            ]

        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-files-o',
                'name' => 'Articulo'
            ],
            'backend.article.index' => [
                'icon' => '',
                'name' => 'Lista'
            ],
            'backend.article.create' => [
                'icon' => '',
                'name' => 'Crear'
            ],
            'backend.category.index' => [
                'icon' => '',
                'name' => 'Categoria'
            ]
        ],
        [
            'backend.tag.index' => [
                'icon' => 'fa fa-tags',
                'name' => 'Tags'
            ]
        ],
        [
            'backend.navigation.index' => [
                'icon' => 'fa fa-navicon',
                'name' => 'Navegacion'
            ]
        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-user',
                'name' => 'User'
            ],
            'backend.user.index' => [
                'icon' => '',
                'name' => 'Lista'
            ],
            'backend.user.create' => [
                'icon' => '',
                'name' => 'Crear'
            ]
        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-cog',
                'name' => 'Config'
            ],
            'backend.system.index' => [
                'icon' => '',
                'name' => 'Lista'
            ],
            'backend.link.index' => [
                'icon' => '',
                'name' => 'Link'
            ],
            'backend.page.index' => [
                'icon' => '',
                'name' => 'Page'
            ]
        ]
    ]
];