<?php
require 'AuthController.php';
class DashboardController extends BaseController
{
    function index()
    {
        $user = new AuthController();
        if ($user->check_logged_in()) {
            $products = $this->loadModel("ProductModel");
            $data = $products->show_all();
            $this->view('dashboard', $data);
        }
        else{
            header("Location:" . ROOT . 'home/login');
        }
    }
}
