<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Controllers\BaseController;

class Konfigurasi extends BaseController
{
    protected $KonfigurasiModel;
    public function __construct()
    {
        $this->KonfigurasiModel = new KonfigurasiModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => 'Konfigurasi',
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
                'konfigurasi' => $this->KonfigurasiModel->orderBy('id', 'DESC')->get()->getResultArray(),
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
        $id = $request->getVar('id');
        $isi = $request->getVar('isi');
        $data = [
            'isi' => $isi,
        ];
        $this->KonfigurasiModel->update($id, $data);

        session()->setFlashdata('pesanInput', 'Berhasil Mengubah Konfigurasi');
        return redirect()->to(base_url('/konfigurasi'));
    }
}
