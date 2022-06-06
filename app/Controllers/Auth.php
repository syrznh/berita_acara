<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->usersModel = new UsersModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }
    public function login()
    {
        //menampilkan halaman login 
        if (session()->get('isLogin') == 1) {
            return redirect()->to(base_url('home'));
            exit;
        }
        return view('auth/login');
    }

    public function testPass()
    {
        //buat salt
        // $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5("admin123");

        return $password;
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang emailnya sama 
        $user = $this->usersModel->where('username', $data['username'])->first();
        //cek apakah email ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            // return md5($data['password']).$user['salt'];
            if ($user['password'] != md5($data['password'])) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to(base_url('login'));
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'id' => $user['id'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'role' => $user['role_id']
                ];
                $this->session->set($sessLogin);
                return redirect()->to(base_url('home'));
            }
        } else {
            //jika email tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('email', 'email tidak ditemukan');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
