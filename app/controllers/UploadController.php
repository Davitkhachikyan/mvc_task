<?php

class UploadController extends BaseController
{
       function index()
       {
               $this->view('add_product');
       }


}















//    function index()
//    {
//        header("Location:" .ROOT . "upload/image");
//        die;
//    }

//    function image()
//    {
//        $user = $this->loadModel("UserModel");
//        if ($result  = $user->check_logged_in())
//        {
//            header("Location:" . ROOT . "login");
//            die;
//        }
//    }



