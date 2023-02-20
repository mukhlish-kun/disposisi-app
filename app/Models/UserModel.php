<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'users';

    // Sudah diubah
    public function findById($id)
    {
        return $this->builder()->where('id', $id)->get()->getFirstRow('array');
    }
}
