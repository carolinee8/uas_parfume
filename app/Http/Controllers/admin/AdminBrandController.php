<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\File;

class AdminBrandController extends Controller
{

    public function index()
    {
        $brand = Brand::all();
        return view('admin/pages/Brand/admin-brand', compact('brand'));
    }

    public function create()
    {
        return view('admin/pages/Brand/cbrand');
    }

    public function store(Request $request)
    {
       if ($request->has('image')){
            $image = $request->image;
            $image_name = time() . '.jpg';
            $image->move(public_path() . '/admin_assets/images/Brand/', $image_name);
            $brands = [
                'brand_judul' => $request->title,
                'brand_image' => $image_name,
                'brand_desc' => $request->desc,
            ];

       }else {
            $brands = [
                'brand_judul' => $request->title,
                'brand_image' => '',
                'brand_desc' => $request->desc,
            ];
       }
       Brand::create($brands);
       return redirect('/admin/admin-brand')->with('create_success', 'Create Berhasil!');
    }

    public function show($id)
    {
        $data = Brand::find($id);
        return view('admin/pages/Brand/dbrand', compact('data'));
    }

    public function edit($id)
    {
        $data = Brand::find($id);
        return view('admin/pages/Brand/ebrand', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findorfail($id);
        
        if ($request->has('image')){
        $picture = $brand->brand_image;
        File::delete("admin_assets/images/Brand/" . $picture);
            
         $image = $request->image;
         $image_name = time() . '.jpg';
         $image->move(public_path() . '/admin_assets/images/Brand/', $image_name);
            $brands = [
                'brand_judul' => $request->title,
                'brand_image' => $image_name,
                'brand_desc' => $request->desc,
            ];

         }else {
            $brands = [
                'brand_judul' => $request->title,
                'brand_desc' => $request->desc,
            ];
         }
         $brand->update($brands);
         return redirect('/admin/admin-brand')->with('edit_success', 'Edit Berhasil!');
    }

    public function destroy($id)
    {
        $brand = Brand::findorfail($id);
            if ($brand->brand_image != ''){
                $picture = $brand->brand_image;
                File::delete("admin_assets/images/Brand/" . $picture);
            }
        Brand::find($id)->delete();
        return redirect('/admin/admin-brand')->with('delete_success', 'Hapus Berhasil!');
    }
}