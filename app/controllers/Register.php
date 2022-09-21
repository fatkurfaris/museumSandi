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
}
