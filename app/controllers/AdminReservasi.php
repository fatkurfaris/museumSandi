<?php

class AdminReservasi extends Controller
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }
        $data['judul'] = 'Dashboard Reservasi';
        $data['reservasi'] = $this->modelAdmin('AdminReservation_model')->getAllReservasi();
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboardReservasi/index', $data);
        $this->view('templates/footerAdmin');
    }
    public function detail($id)
    {
        $data['judul'] = 'Dashboard Reservasi Detail';
        $data['reservasi'] = $this->modelAdmin('AdminReservation_model')->getReservasiById($id);
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboardReservasi/detail', $data);
        $this->view('templates/footerAdmin');
    }
    public function update()
    {
        if ($this->modelAdmin('AdminReservation_model')->update($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . HOMEUSER . '/AdminReservasi');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . HOMEUSER . '/AdminReservasi');
            exit;
        }
    }
}
