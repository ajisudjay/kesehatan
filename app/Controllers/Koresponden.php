<?php

namespace App\Controllers;

use App\Models\KorespondenModel;
use App\Controllers\BaseController;

class Koresponden extends BaseController
{
    protected $KorespondenModel;
    public function __construct()
    {
        $this->KorespondenModel = new KorespondenModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('nama');
        $data = [
            'title' => 'Koresponden - Siswanto',
            'top_header' => 'Koresponden',
            'header' => 'Koresponden',
            'admin' => $admin,
        ];
        return view('backend/koresponden/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'koresponden' => $this->KorespondenModel->orderBy('nama', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/koresponden/view-data', $data)
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
            $urutan = $request->getVar('urutan');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'kategori' => [
                    'label' => 'Kategori',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'urutan' => [
                    'label' => 'Urutan',
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
                        'urutan' => $validation->getError('urutan'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'kategori' => $kategori,
                ];
                $this->KorespondenModel->insert($data);

                $data2 = [
                    'kategori' => $this->KorespondenModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Kategori Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/koresponden/view-data', $data2)
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
            $urutan = $request->getVar('urutan');
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
                'urutan' => [
                    'label' => 'Urutan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'urutan' => $validation->getError('urutan'),
                        'kategori' => $validation->getError('kategori'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'kategori' => $kategori,
                ];

                $this->KorespondenModel->update($id, $data);

                $data2 = [
                    'kategori' => $this->KorespondenModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Kategori Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/koresponden/view-data', $data2)
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
        $this->KorespondenModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Kategori Berhasil Di Hapus !');
        return redirect()->to(base_url('/koresponden'));
    }
}
