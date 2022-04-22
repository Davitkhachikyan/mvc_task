<?php

class UpdateController extends BaseController
{
    public function index()
    {
        $obj = $this->loadModel('ProductModel');
        $product = $obj->find_all_columns($_GET['id']);
        $product = $product[0];

        $data['id'] = $_GET['id'];
        $data['description'] = $product['description'];
        $data['name'] = $product['name'];
        $data['image'] = $product['image'];

        $this->view('update',$data);
    }
}