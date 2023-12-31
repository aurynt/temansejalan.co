<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'menu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['menu', 'price', 'description', 'author', 'photo', 'slug', 'slide'];

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
    protected $afterUpdate    = ['addToActivityUpdate'];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = ['addToActivityDelete'];

    protected function addToActivityInsert(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => $data['data']['author'],
            'table' => 'menu',
            'description' => 'menambahkan menu ' . $data['data']['menu'],
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
            'table' => 'menu',
            'description' => 'menghapus menu',
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
    protected function addToActivityUpdate(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => $data['data']['author'],
            'table' => 'menu',
            'description' => 'mengupdate menu ' . $data['data']['menu'],
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
}
