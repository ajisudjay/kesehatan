<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Models\KorespondenModel;
use App\Models\PertanyaanModel;
use App\Models\RuleModel;

class Pages extends BaseController
{
    protected $KonfigurasiModel;
    protected $KorespondenModel;
    protected $PertanyaanModel;
    protected $RuleModel;
    public function __construct()
    {
        $this->KonfigurasiModel = new KonfigurasiModel();
        $this->KorespondenModel = new KorespondenModel();
        $this->PertanyaanModel = new PertanyaanModel();
        $this->RuleModel = new RuleModel();
    }
    public function index()
    {
        error_reporting(0);
        $bahasa = 'Indonesia';
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'bahasa'  => $bahasa,
            'pertanyaan' => $this->PertanyaanModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }

    public function formcek()
    {
        error_reporting(0);
        $bahasa = 'Indonesia';
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'bahasa'  => $bahasa,
            'pertanyaan' => $this->PertanyaanModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/formcek', $data);
    }

    public function bahasa()
    {
        error_reporting(0);
        $request = \Config\Services::request();
        $bahasa = $request->getVar('bahasa');
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'bahasa'  => $bahasa,
            'pertanyaan' => $this->PertanyaanModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }
    public function hasil()
    {
        $uri = current_url(true);
        $bahasa = $uri->getSegment(3); // Method - instrument
        $slug = $uri->getSegment(4); // Method - instrument
        $request = \Config\Services::request();
        $datakoresponden = $this->KorespondenModel->where('slug', $slug)->first();
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
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'bahasa'  => $bahasa,
            'koresponden' => $this->KorespondenModel->where('slug', $slug)->get()->getResultArray(),
            'rule' => $this->RuleModel->get()->getResultArray(),
            'nilai_a' => $datakoresponden['nilai_a'],
            'nilai_b' => $datakoresponden['nilai_b'],
            'nilai_c' => $datakoresponden['nilai_c'],
            'nilai_d' => $datakoresponden['nilai_d'],
            'nilai_e' => $datakoresponden['nilai_e'],
            'nilai_f' => $datakoresponden['nilai_f'],
            'nilai_g' => $datakoresponden['nilai_g'],
            'nilai_h' => $datakoresponden['nilai_h'],
            'nilai_i' => $datakoresponden['nilai_i'],
            'nilai_j' => $datakoresponden['nilai_j'],
            'nilai_k' => $datakoresponden['nilai_k'],
            'nilai_l' => $datakoresponden['nilai_l'],
            'nilai_m' => $datakoresponden['nilai_m'],
            'nilai_n' => $datakoresponden['nilai_n'],
            'nilai_o' => $datakoresponden['nilai_o'],
            'nilai_p' => $datakoresponden['nilai_p'],
            'nilai_q' => $datakoresponden['nilai_q'],
            'nilai_r' => $datakoresponden['nilai_r'],
            'nilai_s' => $datakoresponden['nilai_s'],

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
        return view('frontend/pages/hasil', $data);
    }

    public function tentangkami()
    {
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/tentangkami', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login - Siswanto',
            'top_header' => 'Login',
            'header' => '',
        ];
        return view('backend/pages/login', $data);
    }

    public function hal_superadmin()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $data = [
                'title' => 'Beranda - Siswanto',
                'top_header' => 'Beranda',
                'header' => '',
                'admin' => $admin,
                'lvl' => $lvl,
            ];
            return view('backend/pages/superadmin', $data);
        } elseif (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') === 'Admin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $data = [
                'title' => 'Beranda - Siswanto',
                'top_header' => 'Beranda',
                'header' => '',
                'admin' => $admin,
                'lvl' => $lvl,
            ];
            return view('backend/pages/superadmin', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
