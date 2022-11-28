<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        // $this->view('templates/navbarUser2', $data);
        $this->view('templates/header', $data);
        $this->view('user/login/index', $data);
        $this->view('templates/footer');
    }

    public function Logins()
    {
        // session_start();
        $_POST = filter_input_array(INPUT_POST);
        $data = [
            'username' => trim($_POST['username']),
            'password' => trim($_POST['password'])
        ];

        if (empty($data['username']) || empty($data['password'])) {
            // flash("login", "Please fill out all inputs");
            // header("location: ../login.php");
            // exit();
            Flasher::setFlash('login', 'please login', 'danger');
            header('Location: ' . HOMEUSER . '/Login');
            exit;
        }

        $loggedInUser = $this->modelUser('User_model')->Login($data['username'], $data['password']);
        if ($loggedInUser) {
            //Create session
            $this->createUserSession($loggedInUser);
        } else {
            Flasher::setFlash('login', 'Password Incorrect', 'danger');
            header('Location: ' . HOMEUSER . '/login');
        }
        // if ($this->modelUser('User_model')->findUserByEmailOrUsername($data['username/email'], $data['username/email'])) {
        //     //User Found

        //     $loggedInUser = $this->modelUser('User_model')->Login($data['username/email'], $data['password']);
        //     if ($loggedInUser) {
        //         //Create session
        //         $this->createUserSession($loggedInUser);
        //     } else {
        //         Flasher::setFlash('login', 'Password Incorrect', 'danger');
        //         header('Location: ' . HOMEUSER . '/Register');
        //     }
        // } else {
        //     Flasher::setFlash('login', 'no user found', 'danger');
        //     header('Location: ' . HOMEUSER . '/Home');
        // }
    }

    public function createUserSession($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['gender'] = $user['gender'];
        $_SESSION['role'] = $user['role'];
        if ($_SESSION['role'] == "admin") {
            header('Location: ' . HOMEUSER . '/Admin');
        } else {
            header('Location: ' . HOMEUSER . '/HomeLogin');
        }
    }
}
