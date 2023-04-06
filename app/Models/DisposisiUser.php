<?php

namespace App\Models;

use CodeIgniter\Model;

class DisposisiUser extends Model
{

    protected $table = 'penerima_disposisi';

    public function getList($id)
    {
        return $this->builder()
            ->select('users.id, username, disposisi_id')
            ->join('users', 'users.id=penerima_disposisi.user_id')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_identities', 'users.id=auth_identities.user_id')
            ->where('disposisi_id', $id)
            ->get()->getResultArray();
    }

    public function getById($id)
    {
        return $this->builder()
            ->where('disposisi_id', $id)
            ->get()->getResultArray();
    }
}
