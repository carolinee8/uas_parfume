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
            'user_image' => 'image|file',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // if($request->file('user_image')){
        //     $validatedData['user_image'] = $request->file('user_image')->store('/admin_assets/images/Product/');
        // }
        if ($request->has('image')){
            $image = $request->image;
            $image_name = time() . '.jpg';
            $image->move(public_path() . '/admin_assets/images/Users/', $image_name);
            $validatedData = [
                'name' => $request->name,
                'user_image' => $image_name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ];

       }else {
            $validatedData = [
                'name' => $request->name,
                'userimage' => '',
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ];
       }

       $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Congrats! Your registration is successfull. Please log in^^');
    }
}
