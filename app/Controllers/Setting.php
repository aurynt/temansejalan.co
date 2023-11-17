<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting as ModelsSetting;
use App\Models\ActivityMOdel;

class Setting extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new ModelsSetting();
    }
    public function update()
    {
        $photo = $this->request->getFile('image');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $rule = [
            'description' => 'required',
            'whatsapp' => 'required',
            'image' => 'required',
            'email' => 'required|valid_email',
        ];

        $data = [
            'description' => $this->request->getPost('description'),
            'instagram' => $this->request->getPost('instagram') ?? '',
            'facebook' => $this->request->getPost('facebook') ?? '',
            'whatsapp' => $this->request->getPost('whatsapp'),
            'email' => $this->request->getPost('email'),
            'image' => $name,
        ];

        if (!$this->validateData($data, $rule)) {
            return \redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $this->db->save($data);
        $photo->move(ROOTPATH . 'public/assets/uploads', $name);
        return \redirect()->back()->with('message', 'succes update app profile');
    }
}
