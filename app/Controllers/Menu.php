<?php




namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ActivityModel;

class Menu extends BaseController
{
    protected $db, $activity;
    public function __construct()
    {
        $this->db = new MenuModel();
        $this->activity = new ActivityModel;
    }
    public function edit($slug)
    {
        $res = $this->db->where('slug', $slug)->first();
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => 'form',
            'datas' => $res,
        ];

        return view('admin/edit/menu', $data);
    }
    public function create()
    {
        helper('form', 'session');
        $photo = $this->request->getFile('photo');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $photo->move(ROOTPATH . 'public/assets/uploads/menus', $name);
        $slug = strtolower(trim(preg_replace("/[^A-Za-z0-9-]+/", '-', $this->request->getVar('name'))));
        $data = [
            'menu' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'photo' => $name,
            'slug' => $slug,
            'author' => session()->get('user_id'),
        ];
        if ($photo->hasMoved()) {
            $res = $this->db->save($data);
            if ($res) {
                return \redirect()->to(base_url('dashboard/menus'));
            }
        }
    }
    public function update()
    {
        helper('form', 'session');
        $photo = $this->request->getFile('photo');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $photo->move(ROOTPATH . 'public/assets/uploads/menus', $name);
        $slug = strtolower(trim(preg_replace("/[^A-Za-z0-9-]+/", '-', $this->request->getVar('name'))));
        $data = [
            'id' => $this->request->getVar('id'),
            'menu' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'photo' => $name,
            'slug' => $slug,
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
        return \redirect()->to('dasboard/list');
    }
}
