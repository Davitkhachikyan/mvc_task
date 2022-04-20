<?php

class ProductModel extends  BaseModel
{
    public function show_products()
    {
        $query = "select * from products";
        $data = $this->read($query);
        return $data;
    }

    public function find($id)
    {
        $product = new BaseModel();
        $query = "select * from products where id = $id";
        $product->read($query);
        return $product;
    }
    public function delete($id)
    {
        $product = new BaseModel();
        $query = "delete from products where id = $id";
    }
}
