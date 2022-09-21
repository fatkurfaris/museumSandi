<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
    // public function viewUser($viewUser, $data = [])
    // {
    //     require_once '../app/views/user' . $viewUser . '.php';
    // }
    // public function viewAdmin($viewAdmin, $data = [])
    // {
    //     require_once '../app/views/admin' . $viewAdmin . '.php';
    // }
}
