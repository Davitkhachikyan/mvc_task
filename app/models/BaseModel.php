<?php

class BaseModel
{
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
}
