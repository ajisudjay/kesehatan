<?php

namespace App\Models;

use CodeIgniter\Model;

class KorespondenModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'koresponden';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nama', 'slug', 'telepon', 'jk', 'umur', 'datetime', 'nilai_a', 'nilai_b', 'nilai_c', 'nilai_d', 'nilai_e', 'nilai_f', 'nilai_g', 'nilai_h', 'nilai_i', 'nilai_j', 'nilai_k', 'nilai_l', 'nilai_m', 'nilai_n', 'nilai_o', 'nilai_p', 'nilai_q', 'nilai_r', 'nilai_s'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function dataKlien($nama, $telepon)
    {
        return $this->db->table('koresponden')->where(['nama' => $nama, 'telepon' => $telepon])->get()->getResultArray();
    }
}
