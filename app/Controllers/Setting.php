<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting as ModelsSetting;

class Setting extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new ModelsSetting();
    }
    public function update()
    {
        $sett = $this->db->find('1');
        $photo = $this->request->getFile('image');
        $image = $sett['image'];

        $name = $image;
        if (!$photo->hasMoved() && $photo->isValid()) {
            $name = date('YmdHis') . '.' . $photo->getExtension();
            $photo->move(ROOTPATH . 'public/assets/uploads/', $name);
            if ($photo->hasMoved() && file_exists(ROOTPATH . 'public/assets/uploads/' . $image)) {
                unlink(ROOTPATH . 'public/assets/uploads/' . $image);
            }
        }
        $rule = [
            'description' => 'required',
            'whatsapp' => 'required', //w-800 h-450
            'email' => 'required|valid_email',
        ];

        $data = [
            'id' => '1',
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
        return \redirect()->back()->with('message', 'succes update app profile');
    }
}
