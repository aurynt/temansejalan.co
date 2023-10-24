<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new User();
    }
    public function signin()
    {
        $data = [
            'title' => 'Sign In'
        ];
        return view('auth/sign-in', $data);
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
        $data = [
            // 'id'=>Uuid::uuid4(),
            'name'     => $this->request->getVar('name'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        if ($this->request->getVar('password') == $this->request->getVar('confirmPassword')) {
            $res = $this->db->insert($data);
            if ($res) {
                return redirect()->to('auth/sign-in');
            } else {
                session()->setFlashdata('message', 'Something wrong');
                return redirect()->to('auth/sign-up');
            }
        } else {
            \session()->setFlashdata('message', 'Password do not match');
            return redirect()->to('auth/sign-up');
        }
    }
    public function login()
    {
        helper(['form']);
        $email = $this->request->getVar('email');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $res = $this->db->where('email', $email)->findAll(1);

        if ($res) {
            if ($res[0]['password'] === $password) {
                return redirect()->to('dashboard');
            } else {
                session()->setFlashdata('message', 'Wrong Password');
                return redirect()->to('auth/sign-in');
            }
        } else {
            session()->setFlashdata('message', 'Email not found');
            return redirect()->to('auth/sign-in');
        }
    }
}
