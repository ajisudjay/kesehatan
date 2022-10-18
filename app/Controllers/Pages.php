<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BeritaModel;
use App\Models\IklanModel;

class Pages extends BaseController
{
    protected $KategoriModel;
    protected $BeritaModel;
    protected $IklanModel;
    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
        $this->BeritaModel = new BeritaModel();
        $this->IklanModel = new IklanModel();
    }
    public function index()
    {
        $databerita = $this->BeritaModel->select('kategori as katber')->distinct('kategori')->orderBy('tanggal', 'ASC')->get()->getResultArray();
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',

            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),

            'hot' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(1),

            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),

            'berita_1' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[0])->where('berita.status', 'Publish')->findAll(1),

            'berita_2' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[1])->where('berita.status', 'Publish')->findAll(1),

            'berita_3' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[2])->where('berita.status', 'Publish')->findAll(1),

            'berita_4' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[3])->where('berita.status', 'Publish')->findAll(1),

            'berita_5' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[4])->where('berita.status', 'Publish')->findAll(1),

            'berita_6' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('timestamp', 'DESC')->orderBy('tanggal', 'DESC')->where('berita.kategori', $databerita[5])->where('berita.status', 'Publish')->findAll(1),

            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(5),

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
            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(5),
        ];
        return view('frontend/pages/tentangkami', $data);
    }

    public function berita_kategori()
    {
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
            'terbaru' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->where('status', 'Publish')->orderBy('tanggal', 'DESC')->findAll(5),
        ];
        return view('frontend/pages/berita_kategori', $data);
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
            return redirect()->to(base_url('/login'));
        }
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',
        ];
        return view('backend/pages/superadmin', $data);
    }
}
