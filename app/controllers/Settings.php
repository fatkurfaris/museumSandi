<?php

class Settings extends Controller
{
    public function index()
    {
        $data['judul'] = 'Settings';
        $this->view('templates/headerUser', $data);
        // $this->view('templates/navbar', $data);
        $this->view('user/settings/index', $data);
        $this->view('templates/footerUser');
    }
}
