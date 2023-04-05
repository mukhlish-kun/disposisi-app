<?php

namespace App\Models;

use CodeIgniter\Model;

class DisposisiModel extends Model
{

    protected $table = 'disposisi';
    protected $allowedFields = [
        'tanggal_penerimaan', 'tanggal_penyelesaian', 'tingkat_keamanan', 'tanggal_surat', 'no_surat', 'asal_surat', 'ringkasan_isi_surat', 'isi_disposisi', 'status', 'paraf', 'deleted_at'
    ];

    public function getLast()
    {
        return $this->builder()
            ->select('id, no_registrasi')
            ->get()->getLastRow();
    }

    public function getList()
    {
        return $this->builder()
            ->select('id, asal_surat, tanggal_penerimaan, ringkasan_isi_surat, tanggal_penerimaan, status')
            ->get()->getResultArray();
    }

    public function getById($id)
    {
        return $this->builder()
            ->where('id', $id)
            ->get()->getLastRow();
    }

    public function updateData($id, $data)
    {
        return $this->builder()
            ->where("id", $id)
            ->update($data);
    }
}
