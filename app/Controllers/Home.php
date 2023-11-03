<?php

namespace App\Controllers;
use App\Models\MenuModel;
use App\Models\GalleryModel;

class Home extends BaseController
{
    protected $menu,$gallery;
    public function __construct() {
        $this->menu = new MenuModel;
        $this->gallery = new GalleryModel;
    }
    public function index()
    {
        $data=[
            'active'=>'Home',
            'menus'=>$this->menu->findAll(4),
            'events'=>$this->gallery->where('event','1')->orderBy('id','DESC')->findAll(3),
            'best'=>$this->menu->orderBy('price','DESC')->findAll(3),
        ];
        return view('home',$data);
    }
    public function menu()
    {
        \helper('db');
        $data=[
            'active'=>'Menu',
            'menus'=>$this->menu->findAll()
        ];
        return view('menu',$data);
    }
    public function gallery()
    {
        $data=[
            'active'=>'Gallery',
            'galleries'=>$this->gallery->findAll()
        ];
        return view('gallery',$data);
    }
    public function about()
    {
        $data=[
            'active'=>'About',
        ];
        return view('about',$data);
    }
}
