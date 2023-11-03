<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'gallery';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['image','author','information','title','event'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'image'=>'required',
        'information'=>'required_with[event]',
        'title'=>'required_with[event]',
    ];
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
    protected $beforeDelete   = ['addToActivityDelete'];
    protected $afterDelete    = [];

    protected function addToActivityInsert(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => $data['data']['author'],
            // 'table' => 'gallery',
            'description' => 'menambahkan gallery',
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
    protected function addToActivityDelete(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => $data['data']['author'],
            'table' => 'gallery',
            'description' => 'menghapus gallery',
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
    protected function addToActivityUpdate(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = new ActivityModel;
        $db->insert([
            'author' => $data['data']['author'],
            'table' => 'gallery',
            'description' => 'mengupdate gallery',
            'created_at' => \date('Y-m-d H:i:s')
        ]);
    }
}
