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

    public function forgotPassword(){
        $data = [
            'title' => 'forgot password'
        ];
        return \view('auth/forget-password',$data);
    }
    public function reset(){
        $email=session()->get('emailResetPassword');
        $password=password_hash($this->request->getPost('password'),PASSWORD_BCRYPT);

        if(!password_verify($this->request->getPost('confirmPassword'),$password)){
            return \redirect()->back()->with('message','Password do not match');
        }
        $res=$this->db->where('email',$email)->set(['password'=>$password])->update();
        return \redirect()->to('auth/sign-in');
    }
    public function resetPassword(){
        $email=session()->get('emailResetPassword');
        $verify=session()->get('token')===$this->request->getGet('token');;
        if(!$verify){
            return redirect()->back()->with('message','Wrong token');
        }

        $data = [
            'title' => 'reset password'
        ];
        return view('auth/reset-password',$data);
    }
    public function resetLink(){
        $emailTo=$this->request->getPost('email');

        \session()->set('emailResetPassword',$emailTo);
        
        $res=$this->db->where('email',$emailTo)->first();
        
        if($res==null){
            return \redirect()->back()->with('message','Email not found');
        }
        $token=bin2hex(random_bytes(16));
        \session()->set('token',$token);

        $subject = 'Reset Password';
        $message = 'Klik tautan berikut untuk mereset password: ' . base_url('auth/reset-password?token=' . $token);
        $email = \Config\Services::email();
        $email->setTo($emailTo);
        $email->setSubject($subject);
        $email->setMessage($message);
        $res=$email->send();
        if(!$res){
            return \redirect()->back()->with('message','Email gagal dikirim');
        }
        return \redirect()->back()->with('succes','Email sudah dikirim');
    }
}
