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
                'berita' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'ASC')->get()->getResultArray(),
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
        if ($request->isAJAX()) {
            $judul = $request->getVar('judul');
            $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($judul)));
            $kategori = $request->getVar('kategori');
            $tanggal = $request->getVar('tanggal');
            $file = $request->getFile('file');
            $isi = $request->getVar('isi');
            $tag = $request->getVar('tag');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'judul' => [
                    'label' => 'Judul',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'kategori' => [
                    'label' => 'Kategori',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'tanggal' => [
                    'label' => 'Tanggal',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'isi' => [
                    'label' => 'Isi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'tag' => [
                    'label' => 'Tag',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'judul' => $validation->getError('judul'),
                        'kategori' => $validation->getError('kategori'),
                        'tanggal' => $validation->getError('tanggal'),
                        'isi' => $validation->getError('isi'),
                        'tag' => $validation->getError('tag'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $newName = $file->getRandomName();
                $file->move('content/gambar/', $newName);
                $nama_foto = $newName;
                dd($judul);
                $data = [
                    'judul' => $judul,
                    'slug' => $slug,
                    'kategori' => $kategori,
                    'tanggal' => $tanggal,
                    'gambar' => $nama_foto,
                    'isi' => $isi,
                    'tag' => $tag,
                    'status' => 'Belum Publish',
                    'admin' => $admin,
                    'timestamp' => $timestamp,
                ];
                $this->BeritaModel->insert($data);

                $data2 = [
                    'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                    'berita' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'sukses' => 'Berita Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/berita/view-data', $data2)
                ];
                echo json_encode($msg);
            }
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
        if ($request->isAJAX()) {
            $id = $request->getVar('id');
            $judul = $request->getVar('judul');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'judul' => [
                    'label' => 'Judul',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'berita' => $validation->getError('berita'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'judul' => $judul,
                ];

                $this->BeritaModel->update($id, $data);

                $data2 = [
                    'kategori' => $this->KategoriModel->orderBy('kategori', 'ASC')->get()->getResultArray(),
                    'berita' => $this->BeritaModel->select('*')->select('berita.id as id_berita')->select('kategori.kategori as nama_kategori')->join('kategori', 'kategori.id=berita.kategori')->orderBy('tanggal', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'sukses' => 'Berita Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/berita/view-data', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }



    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $this->BeritaModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Berita Berhasil Di Hapus !');
        return redirect()->to(base_url('/berita'));
    }
}
