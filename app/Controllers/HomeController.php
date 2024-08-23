<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function main()
    {
        return view("v_main");
    }

    public function index()
    {
        return view("v_flowers");
    }

    public function ucapan()
    {
        return view("v_ucapan");
    }

    public function message()
    {
        return view("v_message");
    }

    public function foto()
    {
        return view("v_foto");
    }

    public function login()
    {
        return view("v_login");
    }
}
