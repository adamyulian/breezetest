
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'Search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Search',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Dashboard',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'    => 'Daftar Harga',
            'is_admins'   => 'Administrator',
            'icon'    => 'fa fa-dollar-sign',
            'can'     => 'isAdmin',
            'submenu' => [
                [
                    'text' => 'Standar Harga Satuan (SHS)',
                    'url'  => '/shs',
                    'icon'  => 'fa fa-dollar-sign',
                ],
                [
                    'text' => 'Standar Biaya Umum (SBU)',
                    'url'  => '/sbu',
                    'icon'  => 'fa fa-dollar-sign',
                ],
                [
                    'text' => 'Harga Satuan Pokok Kegiatan (HSPK)',
                    'url'  => '/hspk',
                    'icon'  => 'fa fa-dollar-sign',
                ],
                [
                    'text' => 'Analisa Standar Belanja (ASB)',
                    'url'  => '/asb',
                    'icon'  => 'fa fa-dollar-sign',
                ],
                [
                    'text' => 'Estimasi',
                    'url'  => '/estimasi',
                    'icon'  => 'fa fa-dollar-sign',
                ],

            ],
        ],
        [
            'text'    => 'Usulan',
            'icon'    => 'fa fa-file',
            'submenu' => [
                [
                    'text' => 'Tambah Usulan',
                    'icon'  => 'fa fa-regular fa-file',
                    'submenu' => [
                        [
                        'text' => 'Usulan SHS',
                        'url'  => '/tambah_usulan',
                        'icon'  => 'fa fa-regular fa-envelope',
                        ],
                        [
                        'text' => 'Usulan HSPK',
                        'url'  => '/usulan_hspk',
                        'icon'  => 'fa fa-regular fa-envelope'
                        ]
                    ]
                ],
                [
                    'text' => 'Konfirmasi Usulan',
                    'url'  => 'admin/konfirm_usulan',
                    'icon' => 'fa fa-regular fa-file',
                ],
                [
                    'text' => 'Daftar Usulan',
                    'url'  => '/daftar_usulan',
                    'icon' => 'fa fa-regular fa-file',
                ],
                [
                    'text' => 'Daftar Usulan Dinas',
                    'url'  => 'admin/daftar_usulan_dinas',
                    'icon' => 'fa fa-regular fa-file',
                ],
                [
                    'text' => 'Perbaikan Usulan',
                    'url'  => 'admin/perbaikan_usulan',
                    'icon' => 'fa fa-regular fa-file',
                ],
                [
                    'text' => 'Daftar Usulan Terverifikasi',
                    'url'  => 'admin/daftar_usulan_verif',
                    'icon' => 'fa fa-regular fa-file',
                ],
                [
                    'text' => 'Rekapitulasi Usulan',
                    'url'  => 'admin/rekap_verif',
                    'icon' => 'fa fa-regular fa-file',
                ],
            ],
        ],
        [
            'text'    => 'Kodefikasi',
            'icon'    => 'fa fa-book',
            'submenu' => [
                [
                    'text' => 'Rekening Belanja',
                    'url'  => '/kodefikasi_rekening_belanja',
                    'icon'  => 'fa fa-regular fa-book',
                ],
                [
                    'text' => 'Rekening Kelompok Aset',
                    'url'  => '/kodefikasi_aset',
                    'icon'  => 'fa fa-regular fa-book',
                ],
                [
                    'text' => 'Satuan Harga',
                    'url'  => '/satuan',
                    'icon'  => 'fa fa-regular fa-book',
                ],
            ],
        ],
        [
            'text'    => 'Pengaturan Akun',
            'icon'    => 'fa fa-users',
            'submenu' => [
                [
                    'text' => 'Data Pengguna',
                    'url'  => '/users',
                    'icon'  => 'fa fa-fw fa-user',
                ],
                [
                    'text' => 'Profil',
                    'url'  => 'admin/settings',
                    'icon' => 'fa fa-fw fa-user',
                ],
            ],
        ],
    ],
];
