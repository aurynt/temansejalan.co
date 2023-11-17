<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Experience as ModelsExperience;

class Experience extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new ModelsExperience();
    }
    public function create()
    {
        $data = [
            'description' => $this->request->getPost('description'),
            'title' => $this->request->getPost('title'),
        ];
        $res = $this->db->save($data);
        if (!$res) {
            return \redirect()->back()->withInput()->with('errors', $this->db->errors());
        }
        return \redirect()->back()->with('message', 'Succes add experience');
    }
    public function delete()
    {
        helper('form');
        $id = $this->request->getPost('id');
        $this->db->delete($id);
        return \redirect()->back()->with('message', 'Succes delete experience');
    }
}
