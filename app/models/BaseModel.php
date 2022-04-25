<?php

class BaseModel
{
    public $table;

    public function db_connect()
    {
        try{
            $string = "mysql:host=localhost; dbname=Product_reviews;";
            return $db = new PDO($string, 'root','Root+123456');

        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function read($query, $data = [])
    {
        $db = $this->db_connect();
        $stm = $db->prepare($query);

        if(count($data) == 0)
        {
            $stm = $db->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            $check = $stm->execute($data);
        }

        if($check)
        {
//            return $stm->fetchAll(PDO::FETCH_COLUMN);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    public function write($query, $data = [])
    {

        $db = $this->db_connect();
        $stm = $db->prepare($query);

        if(count($data) == 0)
        {
            $stm = $db->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            $check = $stm->execute($data);
        }
        if($check)
        {
            return true;
        }else{
            return false;

        }
    }

    public function show_all()
    {
        $query = "select * from " . $this->table;
        $data = $this->read($query);
        return $data;
    }

    public function find($id)
    {
        $query = "select name from $this->table where id='$id'";
        $data = $this->read($query);
        return $data;
    }

    public function delete($id)
    {
        $pdo = $this->db_connect();
        $pdo->prepare("DELETE FROM " . $this->table . " WHERE id=?")->execute([$id]);
    }

    public function update($data, $id)
    {
        $pdo = $this->db_connect();
        $query = "UPDATE products SET name= :name, description= :description, image= :image WHERE id='$id'";
        $pdo->prepare($query)->execute($data);
    }

    public function find_all_columns($id)
    {
        $query = "select * from $this->table where id='$id'";
        $data = $this->read($query);
        return $data;
    }

    public function update_image($data, $id)
    {
        $pdo = $this->db_connect();
        $query = "UPDATE products SET name= :name, description= :description WHERE id='$id'";
        $pdo->prepare($query)->execute($data);
    }

}
