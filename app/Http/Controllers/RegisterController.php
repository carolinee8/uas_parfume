<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    public function index(){
        return view('admin.register.register_index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_image' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Congrats! Your registration is successfull. Please log in^^');
    }
}
