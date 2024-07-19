<?php

namespace App\Controllers;

use App\Models\KorespondenModel;
use App\Controllers\BaseController;

class Ppcu extends BaseController
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
            'title' => 'PPCU - Siswanto',
            'top_header' => 'Personal Prevention Check Up (PPCU)',
            'header' => 'PPCU',
            'admin' => $admin,
        ];
        return view('backend/ppcu/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'ppcu' => $this->KorespondenModel->orderBy('datetime', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/ppcu/view-data', $data)
            ];
            echo json_encode($msg);
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
            $nama = $request->getVar('nama');
            $telepon = $request->getVar('telepon');
            $jk = $request->getVar('jk');
            $umur = $request->getVar('umur');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama' => [
                    'label' => 'Nama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'telepon' => [
                    'label' => 'No. Kontak',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'umur' => [
                    'label' => 'Umur',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama' => $validation->getError('nama'),
                        'telepon' => $validation->getError('telepon'),
                        'umur' => $validation->getError('umur'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'nama' => $nama,
                    'telepon' => $telepon,
                    'jk' => $jk,
                    'umur' => $umur,
                ];

                $this->KorespondenModel->update($id, $data);

                $data2 = [
                    'ppcu' => $this->KorespondenModel->orderBy('datetime', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Koresponden Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/ppcu/view-data', $data2)
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
        return redirect()->to(base_url('/ppcu'));
    }
}
