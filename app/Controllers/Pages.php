<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Laundry Dustira'
        ];

        echo view('/home', $data);
    }
    public function pengelolaan()
    {
        $data = [
            'title' => 'Pengelolaan | Laundry Dustira'
        ];

        echo view('/Pengelolaan', $data);
    }
    public function distribusi()
    {
        $data = [
            'title' => 'Distribusi | Laundry Dustira'
        ];
        echo view('/Distribusi', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | Laundry Dustira',
            'showNav' => false
        ];
        echo view('/Login', $data);
    }
}
