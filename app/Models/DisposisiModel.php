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

    public function getFull($id)
    {
        return $this->builder()
            ->join('laporan_disposisi', 'disposisi.id = laporan_disposisi.disposisi_id')
            ->where("disposisi.id", $id)
            ->get()->getRowArray();
    }

    // public function getList()
    // {
    //     return $this->builder()
    //         ->select('id, asal_surat, tanggal_penerimaan, ringkasan_isi_surat, tanggal_penerimaan, status')
    //         ->get()->getResultArray();
    // }
    public function getJob($id)
    {
        return $this->builder()
            ->select('id, asal_surat, tanggal_penerimaan, ringkasan_isi_surat, tanggal_penerimaan, status')
            ->join('penerima_disposisi', 'penerima_disposisi.disposisi_id = disposisi.id')
            ->where("user_id", $id)
            ->get()->getResultArray();
    }
}
