<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Controllers\BaseController;

class Kategori extends BaseController
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
        return view('backend/kategori/index', $data);
    }
    public function viewData()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/kategori/view-data', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
}
