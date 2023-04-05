<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    protected $table = 'users';

    public function findById($id)
    {
        return $this->builder()->where('id', $id)->get()->getFirstRow('array');
    }

    public function getList()
    {
        return $this->builder()
            ->select('users.id, username, group, secret, active')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_identities', 'users.id=auth_identities.user_id')
            ->where('type = "email_password"')
            ->get()->getResultArray();
    }
}
