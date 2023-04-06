<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{

    protected $table = 'laporan';

    public function isDone($id)
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
}
