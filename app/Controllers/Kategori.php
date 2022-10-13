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
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
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
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
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
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $kategori = $request->getVar('kategori');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'kategori' => [
                    'label' => 'Kategori',
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
                    'sukses' => 'Kategori Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/kategori/view-data', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function edit()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $id = $request->getVar('id');
            $kategori = $request->getVar('kategori');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'kategori' => [
                    'label' => 'Kategori',
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

                $this->KategoriModel->update($id, $data);

                $data2 = [
                    'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Kategori Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/kategori/view-data', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }



    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $this->KategoriModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Kategori Berhasil Di Hapus !');
        return redirect()->to(base_url('/kategori'));
    }
}