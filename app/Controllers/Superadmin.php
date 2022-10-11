<?php

namespace App\Controllers;

class Superadmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - Sistem Administrasi',
            'top_header' => 'Beranda',
            'header' => '',
        ];
        return view('pages/superadmin', $data);
    }
}
