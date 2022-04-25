<?php

class ProductController extends BaseController
{

    public function index()
    {
        $this->view('dashboard');
    }

    public function create()
    {

        $db = new BaseModel();
        $folder = 'assets/';
        $destination = $folder . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $destination);

        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['image'] = $destination;

        $query = "insert into products (name, description, image) values (:name, :description, :image)";
        $result = $db->write($query, $data);
        if ($result) {
            header("Location:" . ROOT . 'dashboard');
        } else echo 'no';
    }

    public function delete()
    {
        $product = $this->loadModel("ProductModel");
        $id = $_GET['id'];
        $product->delete($id);
        header("Location:" . ROOT . 'dashboard');
    }

    public function update()
    {
        $product = $this->loadModel("ProductModel");
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['image'] = $_FILES['file']['tmp_name'];
        $id = $_POST['id'];
        $product->update($data, $id);
        header("Location:" . ROOT . 'dashboard');
    }
}

