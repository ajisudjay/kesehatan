<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Models\KategoriModel;
use App\Models\TingkatModel;
use App\Models\BeritaModel;
use App\Models\IklanModel;

class Pages extends BaseController
{
    protected $KonfigurasiModel;
    protected $TingkatModel;
    protected $KategoriModel;
    protected $BeritaModel;
    protected $IklanModel;
    public function __construct()
    {
        $this->KonfigurasiModel = new KonfigurasiModel();
        $this->TingkatModel = new TingkatModel();
        $this->KategoriModel = new KategoriModel();
        $this->BeritaModel = new BeritaModel();
        $this->IklanModel = new IklanModel();
    }
    public function index()
    {
        error_reporting(0);
        $databerita = $this->BeritaModel->select('kategori as katber')->distinct('kategori')->orderBy('tanggal', 'DESC')->get()->getResultArray();
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),

            'hot' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(1),

            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),

            'berita_1' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[0])->where('berita.status', 'Publish')->findAll(1),

            'berita_2' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[1])->where('berita.status', 'Publish')->findAll(1),

            'berita_3' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[2])->where('berita.status', 'Publish')->findAll(1),

            'berita_4' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[3])->where('berita.status', 'Publish')->findAll(1),

            'berita_5' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[4])->where('berita.status', 'Publish')->findAll(1),

            'berita_6' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[5])->where('berita.status', 'Publish')->findAll(1),

            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(4),

            'iklan' => $this->IklanModel->orderBy('id', 'DESC')->where('status', 'Publish')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }

    public function tentangkami()
    {
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(4),
        ];
        return view('frontend/pages/tentangkami', $data);
    }

    public function berita_tingkat($tingkat)
    {
        $cek_tingkat = $this->TingkatModel->where('tingkat', $tingkat)->first();
        $id_berita_tingkat = $cek_tingkat['id'];
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
            'tingkat' => $tingkat,
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'berita_tingkat' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->where('berita.tingkat', $id_berita_tingkat)->orderBy('tanggal', 'DESC')->findAll(),
            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(4),
        ];
        return view('frontend/pages/berita_tingkat', $data);
    }

    public function berita_kategori($tingkat)
    {
        $uri = current_url(true);
        $tingkat = $uri->getSegment(3); // Method - instrument
        $berita_kategori = $uri->getSegment(4); // Method - instrument
        $cek_tingkat = $this->TingkatModel->where('tingkat', $tingkat)->first();
        $id_berita_tingkat = $cek_tingkat['id'];
        $cek_kategori = $this->KategoriModel->where('kategori', $berita_kategori)->first();
        $id_berita_kategori = $cek_kategori['id'];
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'tingkat' => $tingkat,
            'nama_kategori' => $berita_kategori,
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(4),
            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),
            'berita_kategori' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->where('berita.tingkat', $id_berita_tingkat)->where('berita.kategori', $id_berita_kategori)->orderBy('tanggal', 'DESC')->findAll(),
        ];
        return view('frontend/pages/berita_kategori', $data);
    }

    public function berita_kategoriall($kategori)
    {
        $cek_kategori = $this->KategoriModel->where('kategori', $kategori)->first();
        $id_berita_kategori = $cek_kategori['id'];
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
            'kategori2' => $kategori,
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'berita_kategoriall' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->where('berita.kategori', $id_berita_kategori)->orderBy('tanggal', 'DESC')->findAll(),
            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(4),
        ];
        return view('frontend/pages/berita_kategoriall', $data);
    }

    public function berita($slug)
    {
        $cekberita = $this->BeritaModel->where('slug', $slug)->first();
        $id = $cekberita['id'];
        $dilihat = $cekberita['dilihat'];
        $terbaca = $dilihat + 1;
        // $jumkar_isi = strlen($cekberita['isi']);
        // $setengah = $jumkar_isi / 2;
        // $setengahbulat = round($setengah);
        // $mulailagi = $setengahbulat;
        // $lanjut = substr($mulailagi, 100);
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'tentangkami' => $this->KonfigurasiModel->where('urutan', '1')->first(),
            // 'jumkar' => $jumkar_isi,
            // 'setengah' => $setengahbulat,
            // 'lanjut' => $mulailagi,
            'tingkat_berita' => $this->TingkatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konfigurasi' => $this->KonfigurasiModel->orderBy('judul', 'ASC')->get()->getResultArray(),
            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),
            'kategori' => $this->KategoriModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'berita' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->select('tingkat.tingkat as nama_tingkat')->join('tingkat', 'tingkat.id=berita.tingkat')->join('kategori', 'kategori.id=berita.kategori')->where('slug', $slug)->orderBy('tanggal', 'DESC')->findAll(1),
            'iklan' => $this->IklanModel->orderBy('id', 'DESC')->where('status', 'Publish')->get()->getResultArray(),
            'dilihat' => $terbaca,

        ];
        $dataupdate = [
            'dilihat' => $terbaca,
        ];
        $this->BeritaModel->update($id, $dataupdate);
        return view('frontend/pages/berita_detail', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Beranda - Divisi.id',
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
                'title' => 'Beranda - Divisi.id',
                'top_header' => 'Beranda',
                'header' => '',
                'admin' => $admin,
                'lvl' => $lvl,
                'berita_belum_publish' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Belum Publish')->orderBy('tanggal', 'DESC')->findAll(),
            ];
            return view('backend/pages/superadmin', $data);
        } elseif (session()->get('username') == NULL || session()->get('level') !== 'Admin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $data = [
                'title' => 'Beranda - Divisi.id',
                'top_header' => 'Beranda',
                'header' => '',
                'admin' => $admin,
                'lvl' => $lvl,
                'berita_belum_publish' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Belum Publish')->orderBy('tanggal', 'DESC')->findAll(),
            ];
            return view('backend/pages/superadmin', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
