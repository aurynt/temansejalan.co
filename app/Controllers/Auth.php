<?php

namespace App\Controllers;

class Auth extends BaseController{
    public function signin(){
        $data=[
            'title'=>'Sign In'
        ];
        return view('auth/sign-in',$data);
    }
    public function signup(){
        $data=[
            'title'=>'Sign Up'
        ];
        return view('auth/sign-up',$data);
    }
}