<?php
namespace App\Controllers;
class Auth extends BaseController
{
    public function login()
    {
        $header['title']='Login';
        echo view('auth/login',$header);
    }

    public function register()
    {
        $header['title']='Register';
        echo view('auth/register',$header);
    }

    public function forgot_password()
    {
        $header['title']='Forgot Password';
        echo view('auth/forgot_password',$header);
    }

}