<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Models\KorespondenModel;
use App\Models\PertanyaanModel;

class Pages extends BaseController
{
    protected $KonfigurasiModel;
    protected $KorespondenModel;
    protected $PertanyaanModel;
    public function __construct()
    {
        $this->KonfigurasiModel = new KonfigurasiModel();
        $this->KorespondenModel = new KorespondenModel();
        $this->PertanyaanModel = new PertanyaanModel();
    }
    public function index()
    {
        error_reporting(0);
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'pertanyaan' => $this->PertanyaanModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }

    public function hasil()
    {
        $uri = current_url(true);
        $slug = $uri->getSegment(3); // Method - instrument
        $datakoresponden = $this->KorespondenModel->where('slug', $slug)->first();
        $pr1 = $datakoresponden['p1'];
        $pr2 = $datakoresponden['p2'];
        $pr3 = $datakoresponden['p3'];
        $pr4 = $datakoresponden['p4'];
        $pr5 = $datakoresponden['p5'];
        $pr6 = $datakoresponden['p6'];
        $pr7 = $datakoresponden['p7'];
        $pr8 = $datakoresponden['p8'];
        $pr9 = $datakoresponden['p9'];
        $pr10 = $datakoresponden['p10'];
        $pr11 = $datakoresponden['p11'];
        $pr12 = $datakoresponden['p12'];
        $pr13 = $datakoresponden['p13'];
        $pr14 = $datakoresponden['p14'];
        $pr15 = $datakoresponden['p15'];
        $pr16 = $datakoresponden['p16'];
        $pr17 = $datakoresponden['p17'];
        $pr18 = $datakoresponden['p18'];
        $pr19 = $datakoresponden['p19'];
        $pr20 = $datakoresponden['p20'];
        $pr21 = $datakoresponden['p21'];
        $pr21 = $datakoresponden['p21'];
        $pr22 = $datakoresponden['p22'];
        $pr23 = $datakoresponden['p23'];
        $pr24 = $datakoresponden['p24'];
        $pr25 = $datakoresponden['p25'];
        $pr26 = $datakoresponden['p26'];
        $pr27 = $datakoresponden['p27'];
        $pr28 = $datakoresponden['p28'];
        $pr29 = $datakoresponden['p29'];
        if ($pr1 === 'Ya') {
            $c1 = 1;
            $g1 = 1;
            $h1 = 1;
            $i1 = 1;
            $j1 = 1;
            $l1 = 1;
        } else {
            $c1 = 0;
            $g1 = 0;
            $h1 = 0;
            $i1 = 0;
            $j1 = 0;
            $l1 = 0;
        }
        if ($pr2 === 'Ya') {
            $a2 = 1;
            $b2 = 1;
            $d2 = 1;
            $f2 = 1;
            $g2 = 1;
            $h2 = 1;
            $i2 = 1;
            $p2 = 1;
            $q2 = 1;
            $r2 = 1;
            $s2 = 1;
        } else {
            $a2 = 0;
            $b2 = 0;
            $d2 = 0;
            $f2 = 0;
            $g2 = 0;
            $h2 = 0;
            $i2 = 0;
            $p2 = 0;
            $q2 = 0;
            $r2 = 0;
            $s2 = 0;
        }
        if ($pr3 === 'Ya') {
            $b3 = 1;
            $j3 = 1;
            $k3 = 1;
            $l3 = 1;
            $m3 = 1;
        } else {
            $b3 = 0;
            $j3 = 0;
            $k3 = 0;
            $l3 = 0;
            $m3 = 0;
        }
        if ($pr4 === 'Ya') {
            $j4 = 1;
            $k4 = 1;
            $l4 = 1;
            $m4 = 1;
            $n4 = 1;
        } else {
            $j4 = 0;
            $k4 = 0;
            $l4 = 0;
            $m4 = 0;
            $n4 = 0;
        }
        if ($pr5 === 'Ya') {
            $a5 = 1;
            $c5 = 1;
            $e5 = 1;
            $g5 = 1;
            $h5 = 1;
            $i5 = 1;
            $l5 = 1;
            $m5 = 1;
            $n5 = 1;
            $q5 = 1;
            $r5 = 1;
            $s5 = 1;
        } else {
            $a5 = 0;
            $c5 = 0;
            $e5 = 0;
            $g5 = 0;
            $h5 = 0;
            $i5 = 0;
            $l5 = 0;
            $m5 = 0;
            $n5 = 0;
            $q5 = 0;
            $r5 = 0;
            $s5 = 0;
        }
        if ($pr6 === 'Ya') {
            $d6 = 1;
            $i6 = 1;
        } else {
            $d6 = 0;
            $i6 = 0;
        }
        if ($pr7 === 'Ya') {
            $b7 = 1;
            $d7 = 1;
            $f7 = 1;
            $g7 = 1;
            $h7 = 1;
            $i7 = 1;
            $o7 = 1;
            $q7 = 1;
            $r7 = 1;
            $s7 = 1;
        } else {
            $b7 = 0;
            $d7 = 0;
            $f7 = 0;
            $g7 = 0;
            $h7 = 0;
            $i7 = 0;
            $o7 = 0;
            $q7 = 0;
            $r7 = 0;
            $s7 = 0;
        }
        if ($pr8 === 'Ya') {
            $a8 = 1;
            $b8 = 1;
            $c8 = 1;
            $f8 = 1;
            $i8 = 1;
            $o8 = 1;
            $p8 = 1;
        } else {
            $a8 = 0;
            $b8 = 0;
            $c8 = 0;
            $f8 = 0;
            $i8 = 0;
            $o8 = 0;
            $p8 = 0;
        }
        if ($pr9 === 'Ya') {
            $f9 = 1;
            $j9 = 1;
            $k9 = 1;
            $m9 = 1;
        } else {
            $f9 = 0;
            $j9 = 0;
            $k9 = 0;
            $m9 = 0;
        }
        if ($pr10 === 'Ya') {
            $d10 = 1;
            $i10 = 1;
            $k10 = 1;
            $n10 = 1;
        } else {
            $d10 = 0;
            $i10 = 0;
            $k10 = 0;
            $n10 = 0;
        }
        if ($pr11 === 'Ya') {
            $a11 = 1;
            $c11 = 1;
            $d11 = 1;
            $e11 = 1;
            $f11 = 1;
            $g11 = 1;
            $j11 = 1;
            $k11 = 1;
            $l11 = 1;
            $n11 = 1;
            $o11 = 1;
        } else {
            $a11 = 0;
            $c11 = 0;
            $d11 = 0;
            $e11 = 0;
            $f11 = 0;
            $g11 = 0;
            $j11 = 0;
            $k11 = 0;
            $l11 = 0;
            $n11 = 0;
            $o11 = 0;
        }
        if ($pr12 === 'Ya') {
            $b12 = 1;
            $d12 = 1;
            $k12 = 1;
            $l12 = 1;
            $n12 = 1;
            $o12 = 1;
        } else {
            $b12 = 0;
            $d12 = 0;
            $k12 = 0;
            $l12 = 0;
            $n12 = 0;
            $o12 = 0;
        }
        if ($pr13 === 'Ya') {
            $l13 = 1;
            $n13 = 1;
            $p13 = 1;
        } else {
            $l13 = 0;
            $n13 = 0;
            $p13 = 0;
        }
        if ($pr14 === 'Ya') {
            $c14 = 1;
            $e14 = 1;
            $g14 = 1;
            $k14 = 1;
            $l14 = 1;
            $n14 = 1;
            $p14 = 1;
        } else {
            $c14 = 0;
            $e14 = 0;
            $g14 = 0;
            $k14 = 0;
            $l14 = 0;
            $n14 = 0;
            $p14 = 0;
        }
        if ($pr15 === 'Ya') {
            $a15 = 1;
            $c15 = 1;
            $e15 = 1;
            $h15 = 1;
            $j15 = 1;
        } else {
            $a15 = 0;
            $c15 = 0;
            $e15 = 0;
            $h15 = 0;
            $j15 = 0;
        }
        if ($pr16 === 'Ya') {
            $e16 = 1;
            $i16 = 1;
        } else {
            $e16 = 0;
            $i16 = 0;
        }
        if ($pr17 === 'Ya') {
            $a17 = 1;
            $b17 = 1;
            $c17 = 1;
            $d17 = 1;
            $f17 = 1;
            $g17 = 1;
            $i17 = 1;
            $n17 = 1;
            $q17 = 1;
            $r17 = 1;
            $s17 = 1;
        } else {
            $a17 = 0;
            $b17 = 0;
            $c17 = 0;
            $d17 = 0;
            $f17 = 0;
            $g17 = 0;
            $i17 = 0;
            $n17 = 0;
            $q17 = 0;
            $r17 = 0;
            $s17 = 0;
        }
        if ($pr18 === 'Ya') {
            $a18 = 1;
            $c18 = 1;
            $d18 = 1;
            $i18 = 1;
            $k18 = 1;
            $m18 = 1;
            $n18 = 1;
            $o18 = 1;
            $q18 = 1;
            $r18 = 1;
            $s18 = 1;
        } else {
            $a18 = 0;
            $c18 = 0;
            $d18 = 0;
            $i18 = 0;
            $k18 = 0;
            $m18 = 0;
            $n18 = 0;
            $o18 = 0;
            $q18 = 0;
            $r18 = 0;
            $s18 = 0;
        }
        if ($pr19 === 'Ya') {
            $c19 = 1;
            $e19 = 1;
            $i19 = 1;
            $k19 = 1;
            $l19 = 1;
            $n19 = 1;
            $q19 = 1;
            $r19 = 1;
            $s19 = 1;
        } else {
            $c19 = 0;
            $e19 = 0;
            $i19 = 0;
            $k19 = 0;
            $l19 = 0;
            $n19 = 0;
            $q19 = 0;
            $r19 = 0;
            $s19 = 0;
        }
        if ($pr20 === 'Ya') {
            $c20 = 1;
            $m20 = 1;
            $q20 = 1;
            $r20 = 1;
            $s20 = 1;
        } else {
            $c20 = 0;
            $m20 = 0;
            $q20 = 0;
            $r20 = 0;
            $s20 = 0;
        }
        if ($pr21 === 'Ya') {
            $a21 = 1;
            $b21 = 1;
            $c21 = 1;
            $i21 = 1;
            $j21 = 1;
            $p21 = 1;
        } else {
            $a21 = 0;
            $b21 = 0;
            $c21 = 0;
            $i21 = 0;
            $j21 = 0;
            $p21 = 0;
        }
        if ($pr22 === 'Ya') {
            $q22 = 1;
            $r22 = 1;
            $s22 = 1;
        } else {
            $q22 = 0;
            $r22 = 0;
            $s22 = 0;
        }
        if ($pr23 === 'Ya') {
            $p23 = 1;
            $q23 = 1;
            $r23 = 1;
            $s23 = 1;
        } else {
            $p23 = 0;
            $q23 = 0;
            $r23 = 0;
            $s23 = 0;
        }
        if ($pr24 === 'Ya') {
            $b24 = 1;
            $d24 = 1;
            $f24 = 1;
            $g24 = 1;
            $h24 = 1;
        } else {
            $b24 = 0;
            $d24 = 0;
            $f24 = 0;
            $g24 = 0;
            $h24 = 0;
        }
        if ($pr25 === 'Ya') {
            $a25 = 1;
            $b25 = 1;
            $d25 = 1;
            $g25 = 1;
            $h25 = 1;
        } else {
            $a25 = 0;
            $b25 = 0;
            $d25 = 0;
            $g25 = 0;
            $h25 = 0;
        }
        if ($pr26 === 'Ya') {
            $b26 = 1;
            $d26 = 1;
            $g26 = 1;
            $h26 = 1;
            $j26 = 1;
            $k26 = 1;
            $o26 = 1;
            $p26 = 1;
        } else {
            $b26 = 0;
            $d26 = 0;
            $g26 = 0;
            $h26 = 0;
            $j26 = 0;
            $k26 = 0;
            $o26 = 0;
            $p26 = 0;
        }
        if ($pr27 === 'Ya') {
            $g27 = 1;
            $j27 = 1;
            $k27 = 1;
            $l27 = 1;
            $m27 = 1;
        } else {
            $g27 = 0;
            $j27 = 0;
            $k27 = 0;
            $l27 = 0;
            $m27 = 0;
        }
        if ($pr28 === 'Ya') {
            $m28 = 1;
            $n28 = 1;
        } else {
            $m28 = 0;
            $n28 = 0;
        }
        if ($pr29 === 'Ya') {
            $a29 = 1;
            $b29 = 1;
            $c29 = 1;
            $e29 = 1;
            $g29 = 1;
            $h29 = 1;
            $i29 = 1;
            $j29 = 1;
            $k29 = 1;
            $l29 = 1;
        } else {
            $a29 = 0;
            $b29 = 0;
            $c29 = 0;
            $e29 = 0;
            $g29 = 0;
            $h29 = 0;
            $i29 = 0;
            $j29 = 0;
            $k29 = 0;
            $l29 = 0;
        }
        $nilai_a = $a2 + $a5 + $a8 + $a11 + $a15 + $a17 + $a18 + $a21 + $a25 + $a29;
        $nilai_b = $b2 + $b3 + $b7 + $b8 + $b12 + $b17 + $b21 + $b24 + $b25 + $b26 + $b29;
        $nilai_c = $c1 + $c5 + $c8 + $c11 + $c14 + $c15 + $c17 + $c18 + $c19 + $c20 + $c21 + $c29;
        $nilai_d = $d2 + $d6 + $d7 + $d10 + $d11 + $d12 + $d17 + $d18 + $d24 + $d25 + $d26;
        $nilai_e = $e5 + $e11 + $e14 + $e15 + $e16 + $e19 + $e29;
        $nilai_f = $f2 + $f7 + $f8 + $f9 + $f11 + $f17 + $f24;
        $nilai_g = $g1 + $g2 + $g5 + $g7 + $g11 + $g14 + $g17 + $g24 + $g25 + $g26 + $g27 + $g29;
        $nilai_h = $h1 + $h2 + $h5 + $h7 + $h15 + $h24 + $h25 + $h26 + $h29;
        $nilai_i = $i1 + $i2 + $i5 + $i6 + $i7 + $i8 + $i10 + $i16 + $i17 + $i18 + $i19 + $i21 + $i29;
        $nilai_j = $j1 + $j3 + $j4 + $j9 + $j11 + $j15 + $j21 + $j26 + $j27 + $j29;
        $nilai_k = $k3 + $k4 + $k9 + $k10 + $k11 + $k12 + $k14 + $k18 + $k19 + $k26 + $k27 + $k29;
        $nilai_l = $l1 + $l3 + $l4 + $l5 + $l11 + $l12 + $l13 + $l14 + $l19 + $l27 + $l29;
        $nilai_m = $m3 + $m4 + $m5 + $m9 + $m18 + $m20 + $m27 + $m28;
        $nilai_n = $n4 + $n5 + $n10 + $n11 + $n12 + $n13 + $n14 + $n17 + $n18 + $n19 + $n28;
        $nilai_o = $o7 + $o8 + $o11 + $o12 + $o18 + $o26;
        $nilai_p = $p2 + $p8 + $p13 + $p14 + $p21 + $p23 + $p26;
        $nilai_q = $q2 + $q5 + $q7 + $q17 + $q18 + $q19 + $q20 + $q22 + $q23;
        $nilai_r = $r2 + $r5 + $r7 + $r17 + $r18 + $r19 + $r20 + $r22 + $r23;
        $nilai_s = $s2 + $s5 + $s7 + $s17 + $s18 + $s19 + $s20 + $s22 + $s23;
        $data = [
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
            'koresponden' => $this->KorespondenModel->where('slug', $slug)->get()->getResultArray(),
            'nilai_a' => $nilai_a,
            'nilai_b' => $nilai_b,
            'nilai_c' => $nilai_c,
            'nilai_d' => $nilai_d,
            'nilai_e' => $nilai_e,
            'nilai_f' => $nilai_f,
            'nilai_g' => $nilai_g,
            'nilai_h' => $nilai_h,
            'nilai_i' => $nilai_i,
            'nilai_j' => $nilai_j,
            'nilai_k' => $nilai_k,
            'nilai_l' => $nilai_l,
            'nilai_m' => $nilai_m,
            'nilai_n' => $nilai_n,
            'nilai_o' => $nilai_o,
            'nilai_p' => $nilai_p,
            'nilai_q' => $nilai_q,
            'nilai_r' => $nilai_r,
            'nilai_s' => $nilai_s,
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
            'title' => 'Beranda - Siswanto',
            'top_header' => 'Beranda',
            'header' => '',
        ];
        return view('backend/pages/login', $data);
    }

    public function hal_superadmin()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
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
        } elseif (session()->get('username') == NULL || session()->get('level') !== 'Admin') {
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
