<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriModel;
use App\Controllers\BaseController;

class Berita extends BaseController
{
    protected $BeritaModel;
    protected $KategoriModel;
    public function __construct()
    {
        $this->BeritaModel = new BeritaModel();
        $this->KategoriModel = new KategoriModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => 'Berita',
        ];
        return view('backend/berita/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                'berita' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('berita.kategori as kategori_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'DESC')->orderBy('timestamp', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/berita/view-data', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function tambah()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('username');
        $timestamp = date("Y-m-d H:i:s");
        $request = \Config\Services::request();

        $judul = $request->getVar('judul');
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($judul)));
        $tingkat = $request->getVar('tingkat');
        $kategori = $request->getVar('kategori');
        $tanggal = $request->getVar('tanggal');
        $file = $request->getFile('file');
        $isi = $request->getVar('isi');
        $tag = $request->getVar('tag');
        $jenis_file = $request->getVar('jenis_file');

        $newName = $file->getRandomName();
        $file->move('content/gambar/', $newName);
        $nama_foto = $newName;
        $data = [
            'judul' => $judul,
            'slug' => $slug,
            'tingkat' => $tingkat,
            'kategori' => $kategori,
            'tanggal' => $tanggal,
            'gambar' => $nama_foto,
            'isi' => $isi,
            'tag' => $tag,
            'jenis_file' => $jenis_file,
            'status' => 'Belum Publish',
            'admin' => $admin,
            'timestamp' => $timestamp,
        ];
        $this->BeritaModel->insert($data);

        session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Berita');
        return redirect()->to(base_url('/berita'));
    }

    public function edit()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('username');
        $timestamp = date("Y-m-d H:i:s");
        $request = \Config\Services::request();

        $id = $request->getVar('id');
        $filelama = $this->BeritaModel->where('id', $id)->first();
        $namafilelama = $filelama['gambar'];
        $judul = $request->getVar('judul');
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($judul)));
        $tingkat = $request->getVar('tingkat');
        $kategori = $request->getVar('kategori');
        $tanggal = $request->getVar('tanggal');
        $file = $request->getFile('file');
        $isi2 = $request->getVar('isi2');
        $tag = $request->getVar('tag');
        $jenis_file = $request->getVar('jenis_file');
        if (!file_exists($_FILES['file']['tmp_name'])) {
            $data = [
                'judul' => $judul,
                'slug' => $slug,
                'tingkat' => $tingkat,
                'kategori' => $kategori,
                'tanggal' => $tanggal,
                'isi' => $isi2,
                'tag' => $tag,
                'jenis_file' => $jenis_file,
                'status' => 'Belum Publish',
                'admin' => $admin,
                'timestamp' => $timestamp,
            ];
            $this->BeritaModel->update($id, $data);

            session()->setFlashdata('pesanInput', 'Berhasil Mengubah Berita');
            return redirect()->to(base_url('/berita'));
        } else {
            $newName = $file->getRandomName();
            $file->move('content/gambar/', $newName);
            $nama_foto = $newName;
            unlink('content/gambar/' . $namafilelama);
            $data = [
                'judul' => $judul,
                'slug' => $slug,
                'tingkat' => $tingkat,
                'kategori' => $kategori,
                'tanggal' => $tanggal,
                'gambar' => $nama_foto,
                'isi' => $isi2,
                'tag' => $tag,
                'jenis_file' => $jenis_file,
                'status' => 'Belum Publish',
                'admin' => $admin,
                'timestamp' => $timestamp,
            ];
            $this->BeritaModel->update($id, $data);

            session()->setFlashdata('pesanInput', 'Berhasil Mengubah Berita');
            return redirect()->to(base_url('/berita'));
        }
    }



    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $cekfile = $this->BeritaModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        unlink('content/gambar/' . $namafile);
        $this->BeritaModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Berita Berhasil Di Hapus !');
        return redirect()->to(base_url('/berita'));
    }
}
