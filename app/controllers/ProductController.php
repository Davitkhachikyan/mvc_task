<?php
class ProductController extends BaseController
{
    public function index()
    {
        $obj = $this->loadModel('ProductModel');
        $query = "select * from products";
        $data = $obj->read($query);
    }

    public function create()
    {
        $db = new BaseModel();
        $folder = 'assets';
        $destination = $folder . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $destination);

            $data['name'] = $_POST['name'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_FILES['file']['name'];

            $query = "insert into products (name, description, image) values (:name, :description, :image)";
            $result = $db->write($query, $data);
            if($result)
            {
                header("Location:" . ROOT . 'dashboard');
            }
            else echo 'no';
    }

    function delete()
    {

    }
}

