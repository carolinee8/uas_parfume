<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin/pages/AdminManagement/admin-management', compact('users'));
    }

    // public function create()
    // {
    //     return view('admin/pages/AdminManagement/cmanagement');
    // }

    public function store(Request $request)
    {
       if ($request->has('image')){
            $image = $request->image;
            $image_name = time() . '.jpg';
            $image->move(public_path() . '/admin_assets/images/Users/', $image_name);
            $user = [
                'name' => $request->name,
                'user_image' => $image_name,
                'email' => $request->email,
                'username' => $request->username,
                // 'role' => $request->role,
            ];

       }else {
            $user = [
                'name' => $request->name,
                'user_image' => '',
                'email' => $request->email,
                'username' => $request->username,
            ];
       }
       User::create($user);
       return redirect('/admin/admin-management');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('admin/pages/AdminManagement/dmanagement', compact('data'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin/pages/AdminManagement/emanagement', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findorfail($id);
        
        if ($request->has('image')){
        $picture = $users->user_image;
        File::delete("admin_assets/images/Users/" . $picture);
            
         $image = $request->image;
         $image_name = time() . '.jpg';
         $image->move(public_path() . '/admin_assets/images/Users/', $image_name);
            $user = [
                'name' => $request->name,
                'user_image' => $image_name,
                'email' => $request->desc,
                'username' => $request->desc,
            ];

         }else {
            $user = [
                'name' => $request->name,
                'email' => $request->desc,
                'username' => $request->desc,
            ];
         }
         $users->update($user);
         return redirect('/admin/admin-management');
    }

    public function destroy($id)
    {
        $users = User::findorfail($id);
            if ($users->user_image != ''){
                $picture = $users->user_image;
                File::delete("admin_assets/images/Users/" . $picture);
            }
        User::find($id)->delete();
        return redirect('/admin/admin-management');
    }
}