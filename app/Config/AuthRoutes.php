<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;

class AuthRoutes extends BaseConfig
{
    public array $routes = [
        'register' => [
            [
                'get',
                'register',
                'RegisterController::registerView',
                'register', // Route name
            ],
            [
                'post',
                'register',
                'RegisterController::registerAction',
            ],
        ],
        'login' => [
            [
                'get',
                'login',
                'LoginController::loginView',
                'login', // Route name
            ],
            [
                'post',
                'login',
                'LoginController::loginAction',
            ],
        ],
        'magic-link' => [
            [
                'get',
                'login/magic-link',
                'MagicLinkController::loginView',
                'magic-link',        // Route name
            ],
            [
                'post',
                'login/magic-link',
                'MagicLinkController::loginAction',
            ],
            [
                'get',
                'login/verify-magic-link',
                'MagicLinkController::verify',
                'verify-magic-link', // Route name
            ],
        ],
        'logout' => [
            [
                'get',
                'logout',
                'LoginController::logoutAction',
                'logout', // Route name
            ],
        ],
        'auth-actions' => [
            [
                'get',
                'auth/a/show',
                'ActionController::show',
                'auth-action-show', // Route name
            ],
            [
                'post',
                'auth/a/handle',
                'ActionController::handle',
                'auth-action-handle', // Route name
            ],
            [
                'post',
                'auth/a/verify',
                'ActionController::verify',
                'auth-action-verify', // Route name
            ],
        ],
        'user-management' => [
            [
                'get',
                'manajemen/user',
                'Management::user',
                'user-management', // Route name
            ],
        ],
        'disposisi' => [
            [
                'post',
                'disposisi/tambah',
                'Disposisi::createDisposisi_action',
            ],
            [
                'post',
                'disposisi/proses',
                'Disposisi::proses_action',
            ],
            [
                'post',
                'disposisi/edit',
                'Disposisi::edit_action',
            ],
            [
                'post',
                'disposisi/laporan',
                'Disposisi::laporan_action',
            ],
        ]
    ];
}
