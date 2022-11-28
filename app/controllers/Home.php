<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('user/home/index', $data);
        $this->view('templates/footer');
    }

    public function English()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('user/homeEng/index', $data);
        $this->view('templates/footer');
    }

    public function Tambah()
    {
        if ($this->modelUser('Reservation_model')->tambahFeedback($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . HOMEUSER);
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . HOMEUSER);
            exit;
        }
    }
}
