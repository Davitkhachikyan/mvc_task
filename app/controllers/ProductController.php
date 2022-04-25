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

        $folder = 'assets/';
        $destination = $folder . $_FILES['file']['name'];

        $id = $_POST['id'];
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['image'] = $destination;
        if ($_FILES['file']['name'] != "")
        {
            move_uploaded_file($_FILES['file']['tmp_name'], $destination);
            $product->update($data, $id);
        }
        else{
            $arr['name'] = $_POST['name'];
            $arr['description'] = $_POST['description'];
            $data['description'] = $_POST['description'];
            $product->update_image($arr,$id);
        }

        header("Location:" . ROOT . 'dashboard');
    }
}


//$customer_id=$c_id;
//$c_name= $_POST['c_name'];
//$c_email= $_POST['c_email'];
//$c_pass= $_POST['c_pass'];
//$c_image= $_FILES['c_image']['name'];
//$c_image_temp=$_FILES['c_image']['tmp_name'];
//
//if($c_image_temp != "")
//{
//    move_uploaded_file($c_image_temp , "customer_images/$c_image");
//    $c_update="update costumers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',  customer_image= '$c_image'
//     where customer_id='$customer_id'";
//}else
//{
//    $c_update="update costumers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass'
//     where customer_id='$customer_id'";
//}
//
//$run_update=mysqli_query($con, $c_update);