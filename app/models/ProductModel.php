<?php

class ProductModel extends  BaseModel
{
    public function show_products($query)
    {
        $query = "select * from products";
        $data = $this->read($query);
        return $data;
    }

    public function find($id)
    {
        $query = "select name from products where id = $id";
        $product = $this->read($query);
        return $product;
    }

    public function delete($id)
    {
        $pdo = $this->db_connect();
        $pdo->prepare("DELETE FROM `products` WHERE id=?")->execute([$id]);
    }

    public function update($name,$description, $image, $id)
    {
        $pdo = $this->db_connect();
        $sql = "UPDATE products SET name=?, description=?, image=? WHERE id=?";
        $pdo->prepare($sql)->execute([$name, $description, $image, $id]);
    }

}
