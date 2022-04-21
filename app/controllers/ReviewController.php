<?php
require "AuthController.php";
class ReviewController extends BaseController
{
    function index()
    {
        $user = new AuthController();
        if($user->check_logged_in()){
            $obj = $this->loadModel('ProductModel');
            $product_id = $_GET['id'];
            $product = $obj->find($product_id);
            $_SESSION['prod_name'] = $product[0]['name'];
            $this->view('review', $product);
        }
        else{
            header("Location:" . ROOT . 'home/login');
        }

    }

    public function create()
    {
        $db = new BaseModel();

        $user = $this->loadModel('UserModel');

        $data['stars'] = $_POST['star'];
        $data['comment_text'] = $_POST['comment_text'];
        $data['user_name'] = $user->find_by_email($_SESSION['logged_in_user']['email']);
        $data['product_name'] = $_SESSION['prod_name'];
        $query = "insert into reviews (user_name, product_name, stars, comment_text) values (:user_name, :product_name, :stars, :comment_text)";
        $result = $db->write($query, $data);
        if($result)
        {
            header("Location:" . ROOT . 'dashboard');
        }
        else{
            show($_POST);
        }
//        $product = $this->loadModel('ProductModel');




    }
}