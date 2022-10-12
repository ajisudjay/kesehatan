<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Pages extends BaseController
{
    protected $KategoriModel;
    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Fakultas Universitas Mulawarman',
            'top_header' => 'Surat',
            'header' => 'Surat Keluar',
            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
        ];
        return view('pages/home', $data);
    }
}
