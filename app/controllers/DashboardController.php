<?php
require 'AuthController.php';
class DashboardController extends BaseController
{
    function index()
    {
        $user = new AuthController();
        if ($user->check_logged_in()) {
            $obj = $this->loadModel("ProductModel");
            $data = $obj->show_products("select * from products");
            $this->view('dashboard', $data);
        }
        else{
            header("Location:" . ROOT . 'home/login');
        }
    }
}
