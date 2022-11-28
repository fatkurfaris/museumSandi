<?php
class HomeLogin extends Controller
{

    public function index()
    {
        // session_start();
        if (empty($_SESSION['username'])) {
            header('Location: ' . HOMEUSER . '/Home?pesan=belum_login');
        }

        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $address = $_SESSION['address'];
        $gender = $_SESSION['gender'];

        // $dataUser = $_POST;

        $data['judul'] = 'HomeLogin';
        $data['id'] = $id;
        $data['username'] = $username;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['address'] = $address;
        $data['gender'] = $gender;
        // $data['profile'] = $this->modelUser('User_model')->getUsersById($username);
        $this->view('templates/headerUser', $data);
        // $this->view('templates/sidebarUser', $data);
        $this->view('user/homeLogin/index', $data);
        $this->view('templates/footerUser');
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
