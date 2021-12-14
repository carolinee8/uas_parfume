<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('brand');
    }

    public function product(){
        return view('product');
    }

    public function event(){
        return view('event');
    }
}
