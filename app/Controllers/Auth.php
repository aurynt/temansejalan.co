<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new UserModel();
    }
    public function signin()
    {
        $data = [
            'auth' => service('auth'),
            'title' => 'Sign In'
        ];
        return view('auth/sign-in', $data);
    }
    public function signout()
    {
        session_destroy();
        return redirect()->to(base_url());
    }
    public function signup()
    {
        $data = [
            'title' => 'Sign Up'
        ];
        return view('auth/sign-up', $data);
    }
    public function create()
    {
        helper(['form']);
        if ($this->request->getVar('confirmPassword') === $this->request->getVar('password')) {
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password')
            ];
            $res = $this->db->save($data);
            if (!$res) {
                return redirect()->back()->withInput()->with('errors',$this->db->errors());
            } 
            return redirect()->back()->with('succes','succesfuly created account');
        } else {
            \session()->setFlashdata('message', 'Password do not match',2);
            return redirect()->back()->withInput();
        }
    }
    public function login()
    {
        helper(['form']);
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $res = $this->db->where('email', $email)->first();
        if ($res) {
            if (password_verify($password, $res['password'])) {
                $session = \Config\Services::session();
                $session->set('user_id', $res['id']);
                $session->set('email', $res['email']);
                $session->set('name', $res['name']);

                return redirect()->to('dashboard');
            } else {
                session()->setFlashdata('message', 'Wrong Password');
                return redirect()->to('auth/sign-in')->withInput();
            }
        } else {
            session()->setFlashdata('message', 'Email not found');
            return redirect()->to('auth/sign-in')->withInput();
        }
    }
    public function delete()
    {
        helper('form');
        $email = $this->request->getVar('email');
        $res = $this->db->where('email',$email)->delete();
        return \redirect()->to('dashboard/users')->with('succes','succesfuly deleted user');
    }
}
