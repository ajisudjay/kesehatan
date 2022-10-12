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

    public function tambah()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $kategori = $request->getVar('kategori');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'kategori' => [
                    'label' => 'Kegiatan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'kategori' => $validation->getError('kategori'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'kategori' => $kategori,
                ];
                $this->KategoriModel->insert($data);

                $data2 = [
                    'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Data Kategori Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('kategori/view-data', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
}
