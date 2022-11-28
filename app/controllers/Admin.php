<?php

class Admin extends Controller
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }
        $data['judul'] = 'Dashboard Admin';
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footerAdmin');
    }
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
        unset($_SESSION['address']);
        unset($_SESSION['gender']);
        session_destroy();
        header('Location: ' . HOMEUSER . '/Home');
    }
}
