<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acara;
use Illuminate\Support\Facades\File;

class AdminAcaraController extends Controller
{

    public function index()
    {
        $acara = Acara::all();
        return view('admin/pages/Event/admin-event', compact('acara'));
    }

    public function create()
    {
        return view('admin/pages/Event/cevent');
    }

    public function store(Request $request)
    {
       if ($request->has('image')){
            $image = $request->image;
            $image_name = time() . '.jpg';
            $image->move(public_path() . '/admin_assets/images/Events/', $image_name);
            $event = [
                'acara_title' => $request->title,
                'acara_image' => $image_name,
                'acara_desc' => $request->desc,
            ];

       }else {
            $event = [
                'acara_title' => $request->title,
                'acara_image' => '',
                'acara_desc' => $request->desc,
            ];
       }
       Acara::create($event);
       return redirect('/admin/admin-event')->with('create_success', 'Create Berhasil!');
    }

    public function show($id)
    {
        $data = Acara::find($id);
        return view('admin/pages/Event/devent', compact('data'));
    }

    public function edit($id)
    {
        $data = Acara::find($id);
        return view('admin/pages/Event/eevent', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $acara = Acara::findorfail($id);
        
        if ($request->has('image')){
        $picture = $acara->acara_image;
        File::delete("admin_assets/images/Events/" . $picture);
            
         $image = $request->image;
         $image_name = time() . '.jpg';
         $image->move(public_path() . '/admin_assets/images/Events/', $image_name);
            $event = [
                'acara_title' => $request->title,
                'acara_image' => $image_name,
                'acara_desc' => $request->desc,
            ];

         }else {
            $event = [
                'acara_title' => $request->title,
                'acara_desc' => $request->desc,
            ];
         }
         $acara->update($event);
         return redirect('/admin/admin-event')->with('edit_success', 'Edit Berhasil!');
    }

    public function destroy($id)
    {
        $acara = Acara::findorfail($id);
            if ($acara->acara_image != ''){
                $picture = $acara->acara_image;
                File::delete("admin_assets/images/Events/" . $picture);
            }
        Acara::find($id)->delete();
        return redirect('/admin/admin-event')->with('delete_success', 'Hapus Berhasil!');
    }
}