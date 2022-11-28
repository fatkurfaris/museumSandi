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
    public function modelUser($modelUser)
    {
        require_once '../app/models/user/' . $modelUser . '.php';
        return new $modelUser;
    }
    public function modelAdmin($modelAdmin)
    {
        require_once '../app/models/admin/' . $modelAdmin . '.php';
        return new $modelAdmin;
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
