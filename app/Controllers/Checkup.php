<?php

namespace App\Controllers;

use App\Models\KomentarModel;
use App\Models\KorespondenModel;
use App\Controllers\BaseController;

class Checkup extends BaseController
{
    protected $KomentarModel;
    protected $KorespondenModel;
    public function __construct()
    {
        $this->KomentarModel = new KomentarModel();
        $this->KorespondenModel = new KorespondenModel();
    }

    public function baru()
    {
        $request = \Config\Services::request();
        $nama = $request->getVar('nama');
        $telepon = $request->getVar('telepon');
        $jk = $request->getVar('jk');
        $umur = $request->getVar('umur');
        $nama_slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($nama)));
        $datestamp = date("Y-m-d");
        $slug = $nama_slug . '-' . $telepon . '-' . $datestamp;
        $cekkoresponden = $this->KorespondenModel->where('nama', $nama)->where('telepon', $telepon)->where('jk', $jk)->where('datetime', $datestamp)->where('umur', $umur)->first();

        if ($cekkoresponden < 1) {
            $p1 = $request->getVar('p1');
            $p2 = $request->getVar('p2');
            $p3 = $request->getVar('p3');
            $p4 = $request->getVar('p4');
            $p5 = $request->getVar('p5');
            $p6 = $request->getVar('p6');
            $p7 = $request->getVar('p7');
            $p8 = $request->getVar('p8');
            $p9 = $request->getVar('p9');
            $p10 = $request->getVar('p10');
            $p11 = $request->getVar('p11');
            $p12 = $request->getVar('p12');
            $p13 = $request->getVar('p13');
            $p14 = $request->getVar('p14');
            $p15 = $request->getVar('p15');
            $p16 = $request->getVar('p16');
            $p17 = $request->getVar('p17');
            $p18 = $request->getVar('p18');
            $p19 = $request->getVar('p19');
            $p20 = $request->getVar('p20');
            $p21 = $request->getVar('p21');
            $p22 = $request->getVar('p22');
            $p23 = $request->getVar('p23');
            $p24 = $request->getVar('p24');
            $p25 = $request->getVar('p25');
            $p26 = $request->getVar('p26');
            $p27 = $request->getVar('p27');
            $p28 = $request->getVar('p28');
            $p29 = $request->getVar('p29');

            $data = [
                'slug' => $slug,
                'nama' => $nama,
                'telepon' => $telepon,
                'jk' => $jk,
                'umur' => $umur,
                'datetime' => $datestamp,
                'p1' => $p1,
                'p2' => $p2,
                'p3' => $p3,
                'p4' => $p4,
                'p5' => $p5,
                'p6' => $p6,
                'p7' => $p7,
                'p8' => $p8,
                'p9' => $p9,
                'p10' => $p10,
                'p11' => $p11,
                'p12' => $p12,
                'p13' => $p13,
                'p14' => $p14,
                'p15' => $p15,
                'p16' => $p16,
                'p17' => $p17,
                'p18' => $p18,
                'p19' => $p19,
                'p20' => $p20,
                'p21' => $p21,
                'p22' => $p22,
                'p23' => $p23,
                'p24' => $p24,
                'p25' => $p25,
                'p26' => $p26,
                'p27' => $p27,
                'p28' => $p28,
                'p29' => $p29,
            ];
            $this->KorespondenModel->insert($data);
            return redirect()->to(base_url("/hasil/$slug"));
        } else {
            $idlama = $cekkoresponden['id'];
            $this->KorespondenModel->delete($idlama);
            $p1 = $request->getVar('p1');
            $p2 = $request->getVar('p2');
            $p3 = $request->getVar('p3');
            $p4 = $request->getVar('p4');
            $p5 = $request->getVar('p5');
            $p6 = $request->getVar('p6');
            $p7 = $request->getVar('p7');
            $p8 = $request->getVar('p8');
            $p9 = $request->getVar('p9');
            $p10 = $request->getVar('p10');
            $p11 = $request->getVar('p11');
            $p12 = $request->getVar('p12');
            $p13 = $request->getVar('p13');
            $p14 = $request->getVar('p14');
            $p15 = $request->getVar('p15');
            $p16 = $request->getVar('p16');
            $p17 = $request->getVar('p17');
            $p18 = $request->getVar('p18');
            $p19 = $request->getVar('p19');
            $p20 = $request->getVar('p20');
            $p21 = $request->getVar('p21');
            $p22 = $request->getVar('p22');
            $p23 = $request->getVar('p23');
            $p24 = $request->getVar('p24');
            $p25 = $request->getVar('p25');
            $p26 = $request->getVar('p26');
            $p27 = $request->getVar('p27');
            $p28 = $request->getVar('p28');
            $p29 = $request->getVar('p29');

            $data = [
                'slug' => $slug,
                'nama' => $nama,
                'telepon' => $telepon,
                'jk' => $jk,
                'umur' => $umur,
                'datetime' => $datestamp,
                'p1' => $p1,
                'p2' => $p2,
                'p3' => $p3,
                'p4' => $p4,
                'p5' => $p5,
                'p6' => $p6,
                'p7' => $p7,
                'p8' => $p8,
                'p9' => $p9,
                'p10' => $p10,
                'p11' => $p11,
                'p12' => $p12,
                'p13' => $p13,
                'p14' => $p14,
                'p15' => $p15,
                'p16' => $p16,
                'p17' => $p17,
                'p18' => $p18,
                'p19' => $p19,
                'p20' => $p20,
                'p21' => $p21,
                'p22' => $p22,
                'p23' => $p23,
                'p24' => $p24,
                'p25' => $p25,
                'p26' => $p26,
                'p27' => $p27,
                'p28' => $p28,
                'p29' => $p29,
            ];
            $this->KorespondenModel->insert($data);
            return redirect()->to(base_url("/hasil/$slug"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => 'Komentar',
        ];
        return view('backend/komentar/index', $data);
    }
    public function viewData()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'komentar' => $this->KomentarModel->select('*')->select('komentar.id as id_komentar')->orderBy('komentar.timestamp', 'DESC')->orderBy('id_berita', 'DESC')->join('berita', 'berita.id=komentar.id_berita')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/komentar/view-data', $data)
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
        $this->KomentarModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Komentar Berhasil Di Hapus !');
        return redirect()->to(base_url('/komentar'));
    }
}
