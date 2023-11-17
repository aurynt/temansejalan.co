<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\GalleryModel;
use App\Models\Setting;
use App\Models\Experience;

class Home extends BaseController
{
    protected $menu, $gallery, $setting, $exp;
    public function __construct()
    {
        $this->menu = new MenuModel;
        $this->gallery = new GalleryModel;
        $this->setting = new Setting();
        $this->exp = new Experience();
    }
    public function index()
    {
        $data = [
            'active' => 'Home',
            'setting' => $this->setting->find('1'),
            'menus' => $this->menu->orderBy('id', 'DESC')->findAll(4),
            'events' => $this->gallery->where('event', '1')->orderBy('id', 'DESC')->findAll(3),
            'best' => $this->menu->where('slide', '1')->orderBy('price', 'DESC')->findAll(4),
        ];
        return view('home', $data);
    }
    public function menu()
    {
        $data = [
            'setting' => $this->setting->find('1'),
            'active' => 'Menu',
            'menus' => $this->menu->findAll()
        ];
        return view('menu', $data);
    }
    public function gallery()
    {
        $data = [
            'setting' => $this->setting->find('1'),
            'active' => 'Gallery',
            'galleries' => $this->gallery->findAll()
        ];
        return view('gallery', $data);
    }
    public function about()
    {
        $data = [
            'experiences' => $this->exp->findAll(),
            'setting' => $this->setting->find('1'),
            'active' => 'About',
        ];
        return view('about', $data);
    }
}
