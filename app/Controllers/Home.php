<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'active'=>'home',
        ];
        return view('home',$data);
    }
    public function menu()
    {
        $data=[
            'active'=>'menu',
        ];
        return view('menu',$data);
    }
    public function gallery()
    {
        $data=[
            'active'=>'gallery',
        ];
        return view('gallery',$data);
    }
    public function about()
    {
        $data=[
            'active'=>'about',
        ];
        return view('about',$data);
    }
    public function reservation()
    {
        $data=[
            'active'=>'reservation',
        ];
        return view('reservation',$data);
    }
    public function contact()
    {
        $data=[
            'active'=>'contact',
        ];
        return view('contact',$data);
    }
}
