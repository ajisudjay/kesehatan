<?php

namespace App\Controllers;

use App\Models\KorespondenModel;
use App\Models\RuleModel;
use App\Controllers\BaseController;

class Klien extends BaseController
{
    protected $KorespondenModel;
    protected $RuleModel;
    public function __construct()
    {
        $this->KorespondenModel = new KorespondenModel();
        $this->RuleModel = new RuleModel();
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
                'rule' => $this->RuleModel->get()->getResultArray(),
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
        $datahasil_a = $this->RuleModel->where('kode', 'a')->first();
        $datahasil_b = $this->RuleModel->where('kode', 'b')->first();
        $datahasil_c = $this->RuleModel->where('kode', 'c')->first();
        $datahasil_d = $this->RuleModel->where('kode', 'd')->first();
        $datahasil_e = $this->RuleModel->where('kode', 'e')->first();
        $datahasil_f = $this->RuleModel->where('kode', 'f')->first();
        $datahasil_g = $this->RuleModel->where('kode', 'g')->first();
        $datahasil_h = $this->RuleModel->where('kode', 'h')->first();
        $datahasil_i = $this->RuleModel->where('kode', 'i')->first();
        $datahasil_j = $this->RuleModel->where('kode', 'j')->first();
        $datahasil_k = $this->RuleModel->where('kode', 'k')->first();
        $datahasil_l = $this->RuleModel->where('kode', 'l')->first();
        $datahasil_m = $this->RuleModel->where('kode', 'm')->first();
        $datahasil_n = $this->RuleModel->where('kode', 'n')->first();
        $datahasil_o = $this->RuleModel->where('kode', 'o')->first();
        $datahasil_p = $this->RuleModel->where('kode', 'p')->first();
        $datahasil_qrs = $this->RuleModel->where('kode', 'q')->first();
        if ($request->isAJAX()) {
            $data = [

                'ppcu' => $this->KorespondenModel->where('nama', $namax)->where('telepon', $teleponx)->orderBy('datetime', 'DESC')->get()->getResultArray(),
                'rule' => $this->RuleModel->get()->getResultArray(),
                'risiko_a' => $datahasil_a['risiko'],
                'risiko_b' => $datahasil_b['risiko'],
                'risiko_c' => $datahasil_c['risiko'],
                'risiko_d' => $datahasil_d['risiko'],
                'risiko_e' => $datahasil_e['risiko'],
                'risiko_f' => $datahasil_f['risiko'],
                'risiko_g' => $datahasil_g['risiko'],
                'risiko_h' => $datahasil_h['risiko'],
                'risiko_i' => $datahasil_i['risiko'],
                'risiko_j' => $datahasil_j['risiko'],
                'risiko_k' => $datahasil_k['risiko'],
                'risiko_l' => $datahasil_l['risiko'],
                'risiko_m' => $datahasil_m['risiko'],
                'risiko_n' => $datahasil_n['risiko'],
                'risiko_o' => $datahasil_o['risiko'],
                'risiko_p' => $datahasil_p['risiko'],
                'risiko_qrs' => $datahasil_qrs['risiko'],

                'risiko_eng_a' => $datahasil_a['risiko_eng'],
                'risiko_eng_b' => $datahasil_b['risiko_eng'],
                'risiko_eng_c' => $datahasil_c['risiko_eng'],
                'risiko_eng_d' => $datahasil_d['risiko_eng'],
                'risiko_eng_e' => $datahasil_e['risiko_eng'],
                'risiko_eng_f' => $datahasil_f['risiko_eng'],
                'risiko_eng_g' => $datahasil_g['risiko_eng'],
                'risiko_eng_h' => $datahasil_h['risiko_eng'],
                'risiko_eng_i' => $datahasil_i['risiko_eng'],
                'risiko_eng_j' => $datahasil_j['risiko_eng'],
                'risiko_eng_k' => $datahasil_k['risiko_eng'],
                'risiko_eng_l' => $datahasil_l['risiko_eng'],
                'risiko_eng_m' => $datahasil_m['risiko_eng'],
                'risiko_eng_n' => $datahasil_n['risiko_eng'],
                'risiko_eng_o' => $datahasil_o['risiko_eng'],
                'risiko_eng_p' => $datahasil_p['risiko_eng'],
                'risiko_eng_qrs' => $datahasil_qrs['risiko_eng'],

                'dampak_a' => $datahasil_a['dampak'],
                'dampak_b' => $datahasil_b['dampak'],
                'dampak_c' => $datahasil_c['dampak'],
                'dampak_d' => $datahasil_d['dampak'],
                'dampak_e' => $datahasil_e['dampak'],
                'dampak_f' => $datahasil_f['dampak'],
                'dampak_g' => $datahasil_g['dampak'],
                'dampak_h' => $datahasil_h['dampak'],
                'dampak_i' => $datahasil_i['dampak'],
                'dampak_j' => $datahasil_j['dampak'],
                'dampak_k' => $datahasil_k['dampak'],
                'dampak_l' => $datahasil_l['dampak'],
                'dampak_m' => $datahasil_m['dampak'],
                'dampak_n' => $datahasil_n['dampak'],
                'dampak_o' => $datahasil_o['dampak'],
                'dampak_p' => $datahasil_p['dampak'],
                'dampak_qrs' => $datahasil_qrs['dampak'],

                'dampak_eng_a' => $datahasil_a['dampak_eng'],
                'dampak_eng_b' => $datahasil_b['dampak_eng'],
                'dampak_eng_c' => $datahasil_c['dampak_eng'],
                'dampak_eng_d' => $datahasil_d['dampak_eng'],
                'dampak_eng_e' => $datahasil_e['dampak_eng'],
                'dampak_eng_f' => $datahasil_f['dampak_eng'],
                'dampak_eng_g' => $datahasil_g['dampak_eng'],
                'dampak_eng_h' => $datahasil_h['dampak_eng'],
                'dampak_eng_i' => $datahasil_i['dampak_eng'],
                'dampak_eng_j' => $datahasil_j['dampak_eng'],
                'dampak_eng_k' => $datahasil_k['dampak_eng'],
                'dampak_eng_l' => $datahasil_l['dampak_eng'],
                'dampak_eng_m' => $datahasil_m['dampak_eng'],
                'dampak_eng_n' => $datahasil_n['dampak_eng'],
                'dampak_eng_o' => $datahasil_o['dampak_eng'],
                'dampak_eng_p' => $datahasil_p['dampak_eng'],
                'dampak_eng_qrs' => $datahasil_qrs['dampak_eng'],
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
    public function cek()
    {
        $request = \Config\Services::request();
        $nama = $request->getVar('nama');
        $telepon = $request->getVar('telepon');
        $bahasa = $request->getVar('bahasa');
        $data = [
            'nama' => $nama,
            'bahasa' => $bahasa,
            'ppcu' => $this->KorespondenModel->where('nama', $nama)->where('telepon', $telepon)->orderBy('datetime', 'DESC')->get()->getResultArray(),
            'telepon' => $telepon,
        ];
        return view('frontend/pages/cekriwayat', $data);
    }

    public function cekhasil()
    {
        $request = \Config\Services::request();
        $slug = $request->getVar('slug');
        $nama = $request->getVar('nama');
        $bahasa = $request->getVar('bahasa');
        $telepon = $request->getVar('telepon');

        // rule
        $datahasil_a = $this->RuleModel->where('kode', 'a')->first();
        $datahasil_b = $this->RuleModel->where('kode', 'b')->first();
        $datahasil_c = $this->RuleModel->where('kode', 'c')->first();
        $datahasil_d = $this->RuleModel->where('kode', 'd')->first();
        $datahasil_e = $this->RuleModel->where('kode', 'e')->first();
        $datahasil_f = $this->RuleModel->where('kode', 'f')->first();
        $datahasil_g = $this->RuleModel->where('kode', 'g')->first();
        $datahasil_h = $this->RuleModel->where('kode', 'h')->first();
        $datahasil_i = $this->RuleModel->where('kode', 'i')->first();
        $datahasil_j = $this->RuleModel->where('kode', 'j')->first();
        $datahasil_k = $this->RuleModel->where('kode', 'k')->first();
        $datahasil_l = $this->RuleModel->where('kode', 'l')->first();
        $datahasil_m = $this->RuleModel->where('kode', 'm')->first();
        $datahasil_n = $this->RuleModel->where('kode', 'n')->first();
        $datahasil_o = $this->RuleModel->where('kode', 'o')->first();
        $datahasil_p = $this->RuleModel->where('kode', 'p')->first();
        $datahasil_qrs = $this->RuleModel->where('kode', 'q')->first();

        $data = [
            'ppcu' => $this->KorespondenModel->where('slug', $slug)->get()->getResultArray(),
            'bahasa' => $bahasa,
            'nama' => $nama,
            'telepon' => $telepon,

            'risiko_a' => $datahasil_a['risiko'],
            'risiko_b' => $datahasil_b['risiko'],
            'risiko_c' => $datahasil_c['risiko'],
            'risiko_d' => $datahasil_d['risiko'],
            'risiko_e' => $datahasil_e['risiko'],
            'risiko_f' => $datahasil_f['risiko'],
            'risiko_g' => $datahasil_g['risiko'],
            'risiko_h' => $datahasil_h['risiko'],
            'risiko_i' => $datahasil_i['risiko'],
            'risiko_j' => $datahasil_j['risiko'],
            'risiko_k' => $datahasil_k['risiko'],
            'risiko_l' => $datahasil_l['risiko'],
            'risiko_m' => $datahasil_m['risiko'],
            'risiko_n' => $datahasil_n['risiko'],
            'risiko_o' => $datahasil_o['risiko'],
            'risiko_p' => $datahasil_p['risiko'],
            'risiko_qrs' => $datahasil_qrs['risiko'],

            'risiko_eng_a' => $datahasil_a['risiko_eng'],
            'risiko_eng_b' => $datahasil_b['risiko_eng'],
            'risiko_eng_c' => $datahasil_c['risiko_eng'],
            'risiko_eng_d' => $datahasil_d['risiko_eng'],
            'risiko_eng_e' => $datahasil_e['risiko_eng'],
            'risiko_eng_f' => $datahasil_f['risiko_eng'],
            'risiko_eng_g' => $datahasil_g['risiko_eng'],
            'risiko_eng_h' => $datahasil_h['risiko_eng'],
            'risiko_eng_i' => $datahasil_i['risiko_eng'],
            'risiko_eng_j' => $datahasil_j['risiko_eng'],
            'risiko_eng_k' => $datahasil_k['risiko_eng'],
            'risiko_eng_l' => $datahasil_l['risiko_eng'],
            'risiko_eng_m' => $datahasil_m['risiko_eng'],
            'risiko_eng_n' => $datahasil_n['risiko_eng'],
            'risiko_eng_o' => $datahasil_o['risiko_eng'],
            'risiko_eng_p' => $datahasil_p['risiko_eng'],
            'risiko_eng_qrs' => $datahasil_qrs['risiko_eng'],

            'dampak_a' => $datahasil_a['dampak'],
            'dampak_b' => $datahasil_b['dampak'],
            'dampak_c' => $datahasil_c['dampak'],
            'dampak_d' => $datahasil_d['dampak'],
            'dampak_e' => $datahasil_e['dampak'],
            'dampak_f' => $datahasil_f['dampak'],
            'dampak_g' => $datahasil_g['dampak'],
            'dampak_h' => $datahasil_h['dampak'],
            'dampak_i' => $datahasil_i['dampak'],
            'dampak_j' => $datahasil_j['dampak'],
            'dampak_k' => $datahasil_k['dampak'],
            'dampak_l' => $datahasil_l['dampak'],
            'dampak_m' => $datahasil_m['dampak'],
            'dampak_n' => $datahasil_n['dampak'],
            'dampak_o' => $datahasil_o['dampak'],
            'dampak_p' => $datahasil_p['dampak'],
            'dampak_qrs' => $datahasil_qrs['dampak'],

            'dampak_eng_a' => $datahasil_a['dampak_eng'],
            'dampak_eng_b' => $datahasil_b['dampak_eng'],
            'dampak_eng_c' => $datahasil_c['dampak_eng'],
            'dampak_eng_d' => $datahasil_d['dampak_eng'],
            'dampak_eng_e' => $datahasil_e['dampak_eng'],
            'dampak_eng_f' => $datahasil_f['dampak_eng'],
            'dampak_eng_g' => $datahasil_g['dampak_eng'],
            'dampak_eng_h' => $datahasil_h['dampak_eng'],
            'dampak_eng_i' => $datahasil_i['dampak_eng'],
            'dampak_eng_j' => $datahasil_j['dampak_eng'],
            'dampak_eng_k' => $datahasil_k['dampak_eng'],
            'dampak_eng_l' => $datahasil_l['dampak_eng'],
            'dampak_eng_m' => $datahasil_m['dampak_eng'],
            'dampak_eng_n' => $datahasil_n['dampak_eng'],
            'dampak_eng_o' => $datahasil_o['dampak_eng'],
            'dampak_eng_p' => $datahasil_p['dampak_eng'],
            'dampak_eng_qrs' => $datahasil_qrs['dampak_eng'],
        ];
        return view('frontend/pages/hasilriwayat', $data);
    }
    public function RiwayatKlien()
    {
        $request = \Config\Services::request();
        $nama = $request->getVar('nama');
        $telepon = $request->getVar('telepon');
        $data = [
            'ppcu' => $this->KorespondenModel->where('nama', $nama)->where('telepon', $telepon)->orderBy('datetime', 'DESC')->get()->getResultArray(),
            'validation' => \Config\Services::validation(),
        ];
        $msg = [
            'data' => view('frontend/cekriwayat/riwayat-data', $data)
        ];
        echo json_encode($msg);
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
