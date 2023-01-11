<?php

namespace App\Controllers;

use App\Models\KorespondenModel;
use App\Controllers\BaseController;

class Klien extends BaseController
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
            'title' => 'Klien - Siswanto',
            'top_header' => 'Klien',
            'header' => 'Klien',
            'admin' => $admin,
        ];
        return view('backend/klien/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'klien' => $this->KorespondenModel->select('telepon')->select('nama')->select('jk')->distinct()->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/klien/view-data', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function RiwayatViewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        $namax = $request->getVar('namax');
        $teleponx = $request->getVar('teleponx');
        if ($request->isAJAX()) {
            $data = [

                'ppcu' => $this->KorespondenModel->where('nama', $namax)->where('telepon', $teleponx)->orderBy('datetime', 'DESC')->get()->getResultArray(),
                'namax' => $namax,
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/klien/riwayat-data', $data)
            ];
            echo json_encode($msg);
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
        return redirect()->to(base_url('/klien'));
    }
}
