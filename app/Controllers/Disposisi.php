<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Disposisi extends BaseController
{
    public function tambah()
    {
        $surat = new \App\Models\DisposisiModel();

        $surat = $surat->getLast();
        $header = json_decode(json_encode($surat), true);
        if (!isset($header['no_registrasi'])) {
            $header['no_registrasi'] = 0;
        }
        $header['title'] = 'Tambah Lembar Disposisi';

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/buat_lembar', $header);
        echo view('partials/footer');
    }

    public function createDisposisi_action()
    {
        $surat = new \App\Models\DisposisiModel();

        $lampiran = $this->request->getFile('lampiranFile');
        if ($lampiran->isValid()) {
            $time = Time::now()->getTimestamp();
            $name = $lampiran->getName();
            $new_name = md5($name . $time . session('user_id')) . ".pdf";

            $path = getenv('PATH_PDF') . "/" . $name;
            $new_path = getenv('PATH_PDF') . "/" . $new_name;

            $lampiran->move(getenv('PATH_PDF') . "/");
            rename($path, $new_path);
        } else {
            $new_name = null;
        }

        $data = $this->request->getVar();
        $insert = [
            'no_registrasi'         => $data['nomorAgenda'],
            'tanggal_penerimaan'    => $data['tanggalPenerimaan'],
            // 'tanggal_penyelesaian'  => '',
            'tanggal_surat'         => $data['tanggalSurat'],
            'no_surat'              => $data['nomorSurat'],
            'asal_surat'            => $data['asalSurat'],
            'ringkasan_isi_surat'   => $data['ringkasanIsi'],
            // 'isi_disposisi'         => '',
            // 'paraf'                 => '',
            'created_by'            => session('user_id'),
            'status'                => 1,
            'lampiran_surat'        => $new_name,
        ];

        if (isset($data['tingkatKeamanan'])) {
            $insert['tingkat_keamanan'] = $data['tingkatKeamanan'];
        }

        $surat->db->table('disposisi')->insert($insert);

        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function daftar()
    {
        $surat = new \App\Models\DisposisiModel();
        $surat = $surat->getList();
        $header = [
            'title' => 'Daftar Lembar Disposisi',
            'surat' => $surat,
        ];

        if (session('role')[0] == 'peserta') {
            $surat = new \App\Models\DisposisiModel();
            $surat = $surat->getJob(session('user_id'));
            $header = [
                'title' => 'Daftar Lembar Disposisi',
                'surat' => $surat,
            ];
        }

        $header['title'] = 'Daftar Lembar Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/daftar_disposisi', $header);
        echo view('partials/footer');
    }

    public function proses($id_disposisi)
    {
        if (session('role')[0] == 'peserta') {
            return redirect()->to(base_url('/disposisi/daftar'));
        }

        $surat = new \App\Models\DisposisiModel();
        $user = new \App\Models\UsersModel();
        $surat = $surat->getById($id_disposisi);
        $user = $user->getList();

        $header = json_decode(json_encode($surat), true);
        $header['title'] = 'Proses Disposisi';
        $header['user'] = $user;
        if (isset($header['isi_disposisi'])) {
            $header['isi'] = $header['isi_disposisi'];
        } else {
            $header['isi'] = "";
        }
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/proses_disposisi', $header);
        echo view('partials/footer');
    }

    public function proses_action()
    {
        $surat = new \App\Models\DisposisiModel();
        $post = $this->request->getVar();
        $data = array(
            'tanggal_penyelesaian' => $post["tanggalSelesai"],
            'isi_disposisi' => $post["isiDisposisi"],
            'status' => 2
        );

        $penerima = explode(",", $post['penerimaDisposisi']);
        $penerima_disposisi = array();
        foreach ($penerima as $user_id) {
            $user = [
                'disposisi_id'  => $post['id'],
                'user_id'   => $user_id
            ];
            array_push($penerima_disposisi, $user);
        }

        try {
            $surat->updateData($post["id"], $data);
            $check = $surat->builder()->db()->table('penerima_disposisi')->where('disposisi_id', $post["id"])->get()->getFirstRow('array');
            if (isset($check)) {
                $surat->builder()->db()->table('penerima_disposisi')->where('disposisi_id', $post["id"])->delete();
            }
            $surat->builder()->db()->table('penerima_disposisi')->insertBatch($penerima_disposisi);
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function edit($id_disposisi)
    {
        $surat = new \App\Models\DisposisiModel();
        $surat = $surat->getById($id_disposisi);
        $header = json_decode(json_encode($surat), true);
        $header['title'] = 'Edit Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/edit_disposisi', $header);
        echo view('partials/footer');
    }

    public function edit_action()
    {
        $surat = new \App\Models\DisposisiModel();

        $lampiran = $this->request->getFile('lampiranFile');
        if ($lampiran->isValid()) {
            $time = Time::now()->getTimestamp();
            $name = $lampiran->getName();
            $new_name = md5($name . $time . session('user_id')) . ".pdf";

            $path = getenv('PATH_PDF') . "/" . $name;
            $new_path = getenv('PATH_PDF') . "/" . $new_name;

            $lampiran->move(getenv('PATH_PDF') . "/");
            rename($path, $new_path);
        }

        $data = $this->request->getVar();
        $insert = [
            'no_registrasi'         => $data['nomorAgenda'],
            'tanggal_penerimaan'    => $data['tanggalPenerimaan'],
            'tanggal_surat'         => $data['tanggalSurat'],
            'no_surat'              => $data['nomorSurat'],
            'asal_surat'            => $data['asalSurat'],
            'ringkasan_isi_surat'   => $data['ringkasanIsi'],
            'created_by'            => session('user_id'),
        ];

        if (isset($new_name)) {
            $insert['lampiran_surat'] = $new_name;
        }

        if (isset($data['tingkatKeamanan'])) {
            $insert['tingkat_keamanan'] = $data['tingkatKeamanan'];
        }

        $surat->updateData($data['id_surat'], $insert);

        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function laporan($id_disposisi)
    {
        $surat = new \App\Models\DisposisiModel();
        $user = new \App\Models\UsersModel();
        $disposisi = new \App\Models\DisposisiUser();
        $surat = $surat->getFull($id_disposisi);
        $user = $user->getList();
        $disposisi = $disposisi->getList($id_disposisi);

        $header = $surat;
        $header['title'] = 'Proses Disposisi';
        $header['user'] = $user;
        $header['penerima_disposisi'] = $disposisi;
        if (isset($header['isi_disposisi'])) {
            $header['isi'] = $header['isi_disposisi'];
        } else {
            $header['isi'] = "";
        }

        if (session('role')[0] <> 'peserta') {
            $header['title'] = 'Laporan Disposisi';
            echo view('partials/header', $header);
            echo view('partials/top_menu');
            echo view('partials/side_menu');
            echo view('menu/lembar_disposisi/laporan', $header);
            echo view('partials/footer');
        } else {
            $header['title'] = 'Laporan Disposisi';
            echo view('partials/header', $header);
            echo view('partials/top_menu');
            echo view('partials/side_menu');
            echo view('menu/lembar_disposisi/buat_laporan', $header);
            echo view('partials/footer');
        }
    }

    public function laporan_action()
    {
        $disposisi = new \App\Models\DisposisiUser();
        $lampiran = $this->request->getFile('lampiranFile');
        if ($lampiran->isValid()) {
            $time = Time::now()->getTimestamp();
            $name = $lampiran->getName();
            $new_name = md5($name . $time . session('user_id')) . ".pdf";

            $path = getenv('PATH_LAPORAN') . "/" . $name;
            $new_path = getenv('PATH_LAPORAN') . "/" . $new_name;

            $lampiran->move(getenv('PATH_LAPORAN') . "/");
            rename($path, $new_path);
        } else {
            $new_name = null;
        }

        $data = $this->request->getVar();
        $insert = [
            'disposisi_id'        => $data['id'],
            'tanggal_realisasi'   => $data['tanggalSelesaiReal'],
            'isi_laporan'         => $data['isiLaporan'],
            'lampiran_laporan'    => $new_name,
            'created_by'          => session('user_id'),
        ];
        $disposisi->db->table('laporan_disposisi')->insert($insert);

        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function laporan_approve($id_disposisi)
    {
        $surat = new \App\Models\DisposisiModel();
        $data = array(
            'status' => 3
        );
        $surat->updateData($id_disposisi, $data);
        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function edit_laporan()
    {
        $header['title'] = 'Edit Laporan Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/edit_laporan', $header);
        echo view('partials/footer');
    }

    public function delete($id_disposisi)
    {
        if (session('role')[0] == 'peserta') {
            return redirect()->to(base_url('/disposisi/daftar'));
        }

        $surat = new \App\Models\DisposisiModel();
        $data = array(
            'status' => 4
        );
        $surat->updateData($id_disposisi, $data);
        return redirect()->to(base_url('/disposisi/daftar'));
    }

    public function undelete($id_disposisi)
    {
        if (session('role')[0] == 'peserta') {
            return redirect()->to(base_url('/disposisi/daftar'));
        }

        $surat = new \App\Models\DisposisiModel();
        $data = array(
            'status' => 2
        );
        $surat->updateData($id_disposisi, $data);
        return redirect()->to(base_url('/disposisi/daftar'));
    }
}
