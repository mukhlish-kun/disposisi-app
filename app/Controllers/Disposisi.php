<?php

namespace App\Controllers;

class Disposisi extends BaseController
{
    public function tambah()
    {
        $header['title'] = 'Tambah Lembar Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/buat_lembar', $header);
        echo view('partials/footer');
    }

    public function daftar()
    {
        $header['title'] = 'Daftar Lembar Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/daftar_disposisi', $header);
        echo view('partials/footer');
    }

    public function proses()
    {
        $header['title'] = 'Proses Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/proses_disposisi', $header);
        echo view('partials/footer');
    }

    public function edit()
    {
        $header['title'] = 'Edit Disposisi';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/lembar_disposisi/edit_disposisi', $header);
        echo view('partials/footer');
    }

}