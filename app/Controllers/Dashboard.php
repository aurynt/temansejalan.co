<?php

namespace App\Controllers;

class Dashboard extends BaseController{
    public function index(){
        return view('admin/dashboard');
    }
    public function list(){
        return view('admin/tables');
    }
    public function profile(){
        return view('admin/profile');
    }
}