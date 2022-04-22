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
            $data = $obj->find($product_id);
            $data = $data[0];
            $this->view('review', $data);
        }
        else{
            header("Location:" . ROOT . 'home/login');
        }

    }

    public function create()
    {
        $db = new BaseModel();
        $rev = $this->loadModel('ReviewModel');

        $prod = $this->loadModel("ProductModel");
        $stars = $rev->avg_stars($_POST['product_name']);
        $product_name = $_POST['product_name'];
        $prod->write("update products set avg_review = '$stars' where name = '$product_name'");
        $user = $this->loadModel('UserModel');

        $data['stars'] = $_POST['star'];
        $data['comment_text'] = $_POST['comment_text'];
        $data['user_name'] = $user->find_by_email($_SESSION['logged_in_user']['email']);

        $data['product_name'] = $product_name;
        $query = "insert into reviews (user_name, product_name, stars, comment_text) values (:user_name, :product_name, :stars, :comment_text)";
        $result = $db->write($query, $data);
        if($result)
        {
//            $prod->write("update products set avg_review = '$stars' where name = '$product_name'");
            header("Location:" . ROOT . 'dashboard');
        }
        else{
            show($_POST);
        }
    }
}