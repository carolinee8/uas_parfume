<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin/dashboard/dashboard_index', compact('users'));
    }

    // public function create()
    // {
    //     return view('admin/pages/AdminManagement/cmanagement');
    // }

    // public function store(Request $request)
    // {
    //    if ($request->has('image')){
    //         $image = $request->image;
    //         $image_name = time() . '.jpg';
    //         $image->move(public_path() . '/admin_assets/images/Users/', $image_name);
    //         $user = [
    //             'name' => $request->name,
    //             'user_image' => $image_name,
    //             'email' => $request->email,
    //             'username' => $request->username,
    //             // 'role' => $request->role,
    //         ];

    //    }else {
    //         $user = [
    //             'name' => $request->name,
    //             'user_image' => '',
    //             'email' => $request->email,
    //             'username' => $request->username,
    //         ];
    //    }
    //    User::create($user);
    //    return redirect('/admin/admin-management');
    // }

    public function show($id)
    {
        $data = User::find($id);
        return view('admin/dashboard/edashboard', compact('data'));
    }

    public function edit()
    {
        $data = User::find(Auth::user()->user_id);
        return view('admin/dashboard/edashboard', compact('data'));
    }

    public function update(Request $request)
    {
        $users = User::findorfail(Auth::user()->user_id);
        
        if ($request->has('user_image')){
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
         return redirect('/dashboard/dashboard_index');
    }

    // public function destroy()
    // {
    //     // $user = User::find( auth()->user()->user_id);
    //     // // if($user->delete()) {
    //     // //     Auth::logout();
    //     // //     // return redirect('/login')->with('delete', 'Your account has been deleted!');
    //     // //     return Redirect::route('/login')->with('delete', 'Your account has been deleted!');
    //     // // }
    //     // // // return redirect('/login');

    //     // $user->delete();
    //     // // return redirect('/login')->with('delete', 'Your account has been deleted!');

    //     // // User::find($id)->delete();

    //     // $user = User::find(Auth::user()->id);

    //     // Auth::logout();
    
    //     // if ($user->delete()) {
    
    //     //      return Redirect::route('login')->with('delete', 'Your account has been deleted!');
    //     // }
    //     // return redirect('/login');

    //     if($this->userManipulator->softDeleteUser(Auth::user())){
    //         Auth::logout();
    //         return redirect(url('login'));
    //     }
    // }

    public function destroy($user_id)
    {
        User::find($user_id)->delete();
        return redirect('/login');
    }
}