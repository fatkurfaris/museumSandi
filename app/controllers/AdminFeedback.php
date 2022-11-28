<?php

class AdminFeedback extends Controller
{
    public function index()
    {
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }
        $data['judul'] = 'Dashboard User Feedback';
        $data['feedback'] = $this->modelAdmin('AdminFeedback_model')->getAllFeedback();
        $this->view('templates/headerAdmin', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/dashboardFeedback/index', $data);
        $this->view('templates/footerAdmin');
    }

    public function detail($id)
    {
        $data['judul'] = 'Dashboard User Feedback';
        $data['feedback'] = $this->modelAdmin('AdminFeedback_model')->getFeedbackById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbarUser2', $data);
        $this->view('admin/adminFeedback/detail', $data);
        $this->view('templates/footer');
    }
}
