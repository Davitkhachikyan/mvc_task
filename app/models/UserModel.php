<?php

class UserModel extends BaseModel
{
    public function __construct()
    {
        $this->table = 'users';
    }

    public function find_by_email($email)
    {
        $query = "select name from users where email = $email";
        $name = $this->read($query);
        return $email;
    }
}