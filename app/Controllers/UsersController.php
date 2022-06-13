<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->UsersModel->get_users()
        ];

        // return json_encode($data);

        return view('dashboard/pages/user/index', $data);
    }

    public function create()
    {
        // session();
        $validation = [
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/pages/user/create', $validation);
    }

    public function store()
    {
        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} user harus diisi.',
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'role_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'role harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/users/create')->withInput()->with('validation', $validation);
        }

        $this->UsersModel->insert([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'role_id' => $this->request->getPost('role_id')
        ]);


        session()->setFlashdata('success', 'Berhasil menyimpan data!');
        return redirect()->route('usersIndex');
    }

    public function delete($id)
    {
        // echo 'a';
        $users = new UsersModel();
        $data['users'] = $users->where('id', $id)->first();

        // Delete
        $users->delete($id);
        session()->setFlashdata('success', 'Berhasil menghapus data!');
        return redirect()->route('usersIndex');
    }

    public function edit($id)
    {
        // session();

        $users = new UsersModel();

        $validation = [
            'validation' => \Config\Services::validation(),
            'users' => $users->where('id', $id)->first()
        ];

        return view('dashboard/pages/user/edit', $validation);
    }

    public function update($id)
    {
        $users = new UsersModel();
        $users->update($id, [
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "username" => $this->request->getPost('username'),
            "role_id" => $this->request->getPost('role_id'),
            // "password" => $password
        ]);


        session()->setFlashdata('success', 'Berhasil mengubah data!');
        return redirect()->route('usersIndex');
    }
}
