<?php

namespace App\Controllers;

use App\Models\User;
class UserController extends Controller
{

    public function test()
    {
        $user = User::getInstance();
        return $this->render('test',['id'=>$id]);
    }
}