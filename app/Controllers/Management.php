<?php

namespace App\Controllers;

class Management extends BaseController
{
    public function user()
    {
        $users = new \App\Models\UserModel();
        $data = $users->getList();
        // dd($data);
        $data = [
            'data' => $data
        ];
        $header['title'] = 'Manajemen User';
        echo view('admin/template', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('admin/manajemen-user', $data);
        echo view('admin/footer');
    }
}
