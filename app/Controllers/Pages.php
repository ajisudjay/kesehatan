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
            'title' => 'Beranda - Kanal Berita',
            'top_header' => 'Beranda',
            'header' => '',
            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }

    public function hal_admin()
    {
        $data = [
            'title' => 'Beranda - Kanal Berita',
            'top_header' => 'Beranda',
            'header' => '',
        ];
        return view('backend/pages/index', $data);
    }
}
