<?php

namespace App\Controllers;

class User extends BaseController
{
    public function profile()
    {
        $header['title']='User Profile';
        echo view('partials/header',$header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('menu/profile');
        echo view('partials/footer');
    }
}
