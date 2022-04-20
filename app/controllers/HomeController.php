<?php
require 'AuthController.php';
class HomeController extends BaseController
{
    function index()
    {
        $this->view('home');
    }

    function login()
    {
        {
            $this->view('login');
        }

    }

    function signup()
    {
        $this->view('signup');
    }

    function logout()
    {
        $user = new AuthController();
        $user->logout();
    }
}
