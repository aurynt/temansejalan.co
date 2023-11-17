<?php

namespace App\Models;

use CodeIgniter\Model;

class Experience extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'experience';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'description'];

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
    protected $afterInsert    = ['addToActivityInsert'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = ['addToActivityDelete'];

    protected function addToActivityInsert(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => session()->get('user_id'),
            'table' => 'experience',
            'description' => 'menambahkan experience ' . $data['data']['title'],
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
    protected function addToActivityDelete(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        var_dump($data);
        $db = new ActivityModel;
        $db->insert([
            'author' => \session()->get('user_id'),
            'table' => 'experience',
            'description' => 'menghapus experience',
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
}
