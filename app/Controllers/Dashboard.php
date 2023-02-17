<?php
namespace App\Controllers;
class Dashboard extends BaseController
{
    public function index()
    {
        $header['title']='Dashboard';
        echo view('partials/header',$header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('dashboard');
        echo view('partials/footer');
    }
}