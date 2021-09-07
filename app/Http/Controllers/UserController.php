<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'vanis';
        $users = array(
            "name" => 'Smith john',
            "email" => 'smith@gmail.com',
            "phone" => '682126388'
        );
        return view('user',compact('name','users'));
    }
}
