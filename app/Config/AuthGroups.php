<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'peserta';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys are
     * the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group when using functions such as:
     *      $user->addGroup('superadmin');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://github.com/codeigniter4/shield/blob/develop/docs/quickstart.md#change-available-groups for more info
     */
    public array $groups = [
        'superadmin' => [
            'title'       => 'Super Admin',
            'description' => 'Memegang kendali semua yang ada di webapp.',
        ],
        'KaBPS' => [
            'title'       => 'Kepala BPS Kabupaten/Kota',
            'description' => 'Orang yang berhak mendisposisikan surat yang masuk.',
        ],
        'admin' => [
            'title'       => 'Admin',
            'description' => 'Orang yang bertanggung jawab untuk mengelola manajemen.',
        ],
        'peserta' => [
            'title'       => 'Peserta Disposisi',
            'description' => 'Orang yang dapat ditunjuk dalam surat disposisi.',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system. Each system is defined
     * where the key is the
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'admin.access'      => 'Laman yang hanya bisa diakses admin',
        'admin.settings'    => 'Setting yang hanya bisa diakses admin',
        'admin.delete'      => 'Can delete existing non-admin users',
        'peserta.control'     => 'Laman yang dapat diakses oleh peserta',
        'peserta.create'      => 'Can create new non-admin users',
        'peserta.edit'        => 'Can edit existing non-admin users',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     */
    public array $matrix = [
        'superadmin' => [
            'admin.*',
            'peserta.*',
        ],
        'KaBPS' => [
            'admin.*',
            'peserta.*',
        ],
        'admin' => [
            'admin.*',
            'peserta.create',
            'users.edit',
        ],
        'peserta' => [
            'peserta.control',
            'peserta.create',
            'peserta.edit',
        ],
    ];
}
