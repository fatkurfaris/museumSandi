<?php

class Reservation extends Controller
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }

        $id = $_SESSION['id'];
        $username = $_SESSION['username'];

        $data['username'] = $username;
        $data['id'] = $id;

        $data['judul'] = 'Reservation';
        $data['reservasi'] = $this->modelUser('Reservation_model')->getAllReservasiByName($username);
        $this->view('templates/headerUser', $data);
        // $this->view('templates/navbarUser2', $data);
        $this->view('user/reservation/index', $data);
        $this->view('templates/footerUser');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['reservasi'] = $this->modelUser('Reservation_model')->getReservasiById($id);
        $this->view('templates/headerUser', $data);
        // $this->view('templates/navbarUser2', $data);
        $this->view('user/reservation/detail', $data);
        $this->view('templates/footerUser');
    }

    public function tambahReservasi()
    {
        if ($this->modelUser('Reservation_model')->tambahDataReservasi($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . HOMEUSER . '/Reservation');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . HOMEUSER . '/Reservation');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->modelUser('Reservation_model')->hapusReservasi($id) > 0) {
            Flasher::setFlash('berhasil', 'Dihapus', 'success');
            header('Location: ' . HOMEUSER . '/Reservation');
            exit;
        } else {
            Flasher::setFlash('gagal', 'Dihapus', 'danger');
            header('Location: ' . HOMEUSER . '/Reservation');
            exit;
        }
    }
}
