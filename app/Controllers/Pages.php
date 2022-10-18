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
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',

            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),

            'hot' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(1),

            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(5),

            'berita1' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),

            'berita2' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'ASC')->orderBy('timestamp', 'ASC')->where('status', 'Publish')->findAll(3),

            'iklan' => $this->IklanModel->orderBy('id', 'DESC')->where('status', 'Publish')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
    }

    public function detailberita()
    {
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => '',

            'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),

            'hot' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(1),

            'trending' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(5),

            'berita1' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->where('status', 'Publish')->findAll(3),

            'berita2' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('dilihat', 'DESC')->orderBy('tanggal', 'ASC')->orderBy('timestamp', 'ASC')->where('status', 'Publish')->findAll(3),

            'iklan' => $this->IklanModel->orderBy('id', 'DESC')->where('status', 'Publish')->get()->getResultArray(),
        ];
        return view('frontend/pages/index', $data);
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
