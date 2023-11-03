<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\ActivityModel;

class Gallery extends BaseController
{
    protected $db, $activity;
    public function __construct()
    {
        $this->db = new GalleryModel();
        $this->activity = new ActivityModel;
    }
    public function edit($id)
    {
        $res = $this->db->find($id);
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => 'form',
            'datas' => $res,
        ];

        return view('admin/edit/gallery', $data);
    }

    public function create()
    {
        helper('form', 'session');
        $photo = $this->request->getFile('image');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $photo->move(ROOTPATH . 'public/assets/uploads/galleries', $name);
        $data = [
            'image' => $name,
            'information' => $this->request->getVar('information'),
            'title' => $this->request->getVar('title'),
            'event' => $this->request->getVar('event'),
            'author' => session()->get('user_id'),
        ];
        if ($photo->hasMoved()) {
            $res = $this->db->save($data);
            if ($res) {
                return \redirect()->to(\base_url('dashboard/galleries'));
            }
        }
    }
    public function update()
    {
        helper('form', 'session');
        $photo = $this->request->getFile('image');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $photo->move(ROOTPATH . 'public/assets/uploads/galleries', $name);
        $data = [
            'id' => $this->request->getVar('id'),
            'image' => $name,
            'information' => $this->request->getVar('information'),
            'title' => $this->request->getVar('title'),
            'event' => $this->request->getVar('event'),
            'author' => session()->get('user_id'),
        ];
        if ($photo->hasMoved()) {
            $res = $this->db->save($data);
            return \redirect()->back();
        }
    }
    public function delete()
    {
        helper('form');
        $id = $this->request->getVar('id');
        $res = $this->db->delete($id);
        return \redirect()->back();
    }
    public function all()
    {
        helper('form');
        $res = $this->db->findAll();
        return $res;
    }
}
