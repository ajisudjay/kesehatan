<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KonfigurasiModel;
use App\Controllers\BaseController;

class Konfigurasi extends BaseController
{
    protected $BeritaModel;
    protected $KonfigurasiModel;
    public function __construct()
    {
        $this->BeritaModel = new BeritaModel();
        $this->KonfigurasiModel = new KonfigurasiModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('nama');
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => 'Konfigurasi',
            'admin' => $admin,
            'berita_belum_publish' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Belum Publish')->orderBy('tanggal', 'DESC')->findAll(),
        ];
        return view('backend/konfigurasi/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/konfigurasi/view-data', $data)
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
            $judul = $request->getVar('judul');
            $isi = $request->getVar('isi');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'judul' => [
                    'label' => 'Konfigurasi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'judul' => $validation->getError('judul'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'judul' => $judul,
                    'isi' => $isi,
                ];

                $this->KonfigurasiModel->update($id, $data);

                $data2 = [
                    'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Konfigurasi Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/konfigurasi/view-data', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
}
