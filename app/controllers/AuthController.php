<?php
class AuthController extends BaseController
{
    public function signup()
    {
        $db = new BaseModel();
            $arr['name'] = $_POST['name'];
            $arr['password'] = $_POST['password'];
            $arr['email'] = $_POST['email'];
            $arr['surname'] = $_POST['surname'];
            $arr['age'] = $_POST['age'];

            $query = "insert into users (name, password, email, age, surname) values (:name, :password, :email, :age, :surname)";
            $data = $db->write($query, $arr);

            if ($data) {
                $this->view('login');
            } else {
                $_SESSION['error'] = 'wrong username or password';
            }
    }

    public function login()
    {
        $db = new BaseModel();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $arr['email'] = $_POST['email'];
            $arr['password'] = $_POST['password'];

            $query = "select * from users where email = :email && password = :password limit 1";
            $data = $db->read($query, $arr);
            if (count($data)) {
                $_SESSION['logged_in_user'] = $arr;

                header("Location:" . ROOT . 'dashboard');
            } else {
                header("Location:" . ROOT . 'home');
            }
        } else {
            $_SESSION['error'] = 'please enter a valid username and password';
        }
    }


    function check_logged_in()
    {
        return isset($_SESSION['logged_in_user']);
    }


    function logout()
    {
        session_destroy();
        header("Location:" . ROOT . 'home');
    }
}
