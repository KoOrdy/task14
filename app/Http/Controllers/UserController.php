<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function adduser(){
        User::factory(100)->create();
        echo 'Users created successfully';
    }
    public function home(){
        $users=User::all();
        return view('home',compact('users'));
    }
}
