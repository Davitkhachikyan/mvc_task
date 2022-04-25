<?php
require 'AuthController.php';
class CommentController extends BaseController
{
        public function index()
        {
            $user = new AuthController();
            if ($user->check_logged_in())
            {
                $obj = $this->loadModel('ProductModel');
                $data = $obj->find_all_columns($_GET['id']);
                $data = $data[0];
                $comment = $this->loadModel('ReviewModel');
                $comment = $comment->find_comments($data['id']);
                $data['comments'] = $comment;

                $this->view('comment', $data);
            }
            else{
                header("Location:" . ROOT . 'home/login');
            }

        }
}

