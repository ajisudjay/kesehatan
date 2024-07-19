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
        $slug = $uri->getSegment(3); // Method - instrument
        $datakoresponden = $this->KorespondenModel->where('slug', $slug)->first();
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
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
