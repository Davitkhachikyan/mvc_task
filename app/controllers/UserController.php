<?php

class UserController extends BaseController
{
    public function find($id)
    {
        $user = new UserModel();
        $user->find($id);
    }
}