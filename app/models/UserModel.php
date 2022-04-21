<?php

class UserModel extends BaseModel
{
    public function find($id)
    {
        $query = "select name from users where id = $id";
        $name = $this->read($query);
        return $name;
    }

    public function find_by_email($email)
    {
        $query = "select name from users where email = $email";
        $name = $this->read($query);
        return $email;
    }
}