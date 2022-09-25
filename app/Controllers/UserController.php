<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel;

        $users = $userModel->findAll();
        $data = [
            'users' => $users
        ];

        echo view('templates/header');
        echo view('pages/index', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        echo view('templates/header');
        echo view('pages/create');
        echo view('templates/footer');
    }

    public function store()
    {
        $userModel = new UserModel;

        $userModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ]);

        return redirect('create');
    }

    public function edit($id)
    {
        $userModel = new UserModel;

        $user = $userModel->find($id);

        $data = [
            'user' => $user
        ];

        echo view('templates/header');
        echo view('pages/edit', $data);
        echo view('templates/footer');
    }

    public function update($id)
    {
        $userModel = new UserModel;

        $userModel->update($id, [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ]);

        return redirect('users');
    }
}