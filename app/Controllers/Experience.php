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
        $rule = [
            'description' => 'required',
            'title' => 'required',
        ];
        $data = [
            'description' => $this->request->getPost('description'),
            'title' => $this->request->getPost('title'),
        ];
        if (!$this->validateData($data, $rule)) {
            return \redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $this->db->save($data);
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
