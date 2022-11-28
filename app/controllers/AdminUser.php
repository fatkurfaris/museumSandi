<?php

class AdminUser extends Controller
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }
        $data['judul'] = 'Dashboard user';
        $data['user'] = $this->modelAdmin('AdminUser_model')->getAllUser();
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboardUser/index', $data);
        $this->view('templates/footerAdmin');
    }
    public function detail($id)
    {
        $data['judul'] = 'Dashboard user Detail';
        $data['user'] = $this->modelAdmin('AdminUser_model')->getUserById($id);
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboardUser/detail', $data);
        $this->view('templates/footerAdmin');
    }
    public function hapus($id)
    {
        if ($this->modelAdmin('AdminUser_model')->hapusDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'Dihapus', 'success');
            header('Location: ' . HOMEUSER . '/AdminUser');
            exit;
        } else {
            Flasher::setFlash('gagal', 'Dihapus', 'danger');
            header('Location: ' . HOMEUSER . '/AdminUser');
            exit;
        }
    }
}
