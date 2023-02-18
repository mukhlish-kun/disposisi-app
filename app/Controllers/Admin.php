<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $user = auth()->user();
        // dd($user->inGroup('admin', 'user', 'superadmin'));


        return view('admin');
    }
}
