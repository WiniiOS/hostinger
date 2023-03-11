<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("sign-up");
    }

    public function errorPage()
    {
        return view("404");
    }
    
}
