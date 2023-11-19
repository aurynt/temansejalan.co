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
            'active' => [
                'page' => 'form',
                'current' => 'Menu'
            ],
            'datas' => $res,
        ];

        return view('admin/edit/menu', $data);
    }
    public function create()
    {
        helper('form', 'session');
        $photo = $this->request->getFile('photo');
        $name = date('YmdHis') . '.' . $photo->getExtension();
        $slug = strtolower(trim(preg_replace("/[^A-Za-z0-9-]+/", '-', $this->request->getVar('name'))));

        $rule = [
            'menu' => 'min_length[3]|required|is_unique[menu]',
            'price' => 'required',
            'description' => 'required_with[slide]',
            'photo' => 'required|', //ext_in[photo,jpeg,png,jpg]|uploaded[photo]',
        ];

        $data = [
            'menu' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'photo' => $name,
            'slug' => $slug,
            'slide' => $this->request->getVar('slide'),
            'author' => session()->get('user_id'),
        ];
        if (!$this->validateData($data, $rule)) {
            return \redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $photo->move(ROOTPATH . 'public/assets/uploads/menus', $name);
        $this->db->save($data);
        return \redirect()->back()->with('succes', 'Succesfuly added menu');
    }
    public function update()
    {
        helper('form', 'session');
        $menu = $this->db->find($this->request->getPost('id'));
        $photo = $this->request->getFile('photo');
        $image = $menu['photo'];

        $name = $image;
        if (!$photo->hasMoved() && $photo->isValid()) {
            $name = date('YmdHis') . '.' . $photo->getExtension();
            $photo->move(ROOTPATH . 'public/assets/uploads/menus', $name);
            if ($photo->hasMoved() && file_exists(ROOTPATH . 'public/assets/uploads/menus/' . $image)) {
                unlink(ROOTPATH . 'public/assets/uploads/menus/' . $image);
            }
        }
        $slug = strtolower(trim(preg_replace("/[^A-Za-z0-9-]+/", '-', $this->request->getVar('name'))));
        $rule = [
            'menu' => 'min_length[3]|required',
            'price' => 'required',
            'description' => 'required_with[slide]',
            'photo' => 'required|', //ext_in[photo,jpeg,png,jpg]|uploaded[photo]',
        ];

        $data = [
            'id' => $this->request->getVar('id'),
            'menu' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'photo' => $name,
            'slug' => $slug,
            'slide' => $this->request->getVar('slide'),
            'author' => session()->get('user_id'),
        ];

        if (!$this->validateData($data, $rule)) {
            return \redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }


        $this->db->save($data);
        return \redirect()->back()->with('succes', 'Succesfuly updated menu');
    }
    public function delete()
    {
        helper('form');
        $id = $this->request->getVar('id');
        $res = $this->db->delete($id);
        return \redirect()->to('dashboard/menus')->with('succes', 'Succesfuly deleted menu');
    }
}
