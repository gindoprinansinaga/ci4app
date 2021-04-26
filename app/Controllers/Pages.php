<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Codeigniter 4',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layouts/header', $data);
        echo view('pages/home');
        echo view('layouts/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        echo view('layouts/header', $data);
        echo view('pages/about');
        echo view('layouts/footer');
    }
}
