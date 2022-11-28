<?php

class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('user/register/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {

        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'phone' => trim($_POST['phone']),
        ];

        if ($this->modelUser('User_model')->findUserByEmailOrUsername($data['email'], $data['username'])) {
            Flasher::setFlash('register', 'Username or email already taken', 'danger');
            header('Location: ' . HOMEUSER . '/register');
        } else {
            if ($this->modelUser('User_model')->tambahDataUser($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . HOMEUSER . '/login');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . HOMEUSER . '/register');
                exit;
            }
        }
    }
}
