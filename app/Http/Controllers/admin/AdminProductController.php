<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin/pages/Product/admin-product', compact('products'));
    }

    public function create()
    {
        return view('admin/pages/Product/cproduct', [
            'tags' => Tag::all()
        ]);
    }

    public function store(Request $request)
    {
       if ($request->has('image')){
            $image = $request->image;
            $image_name = time() . '.jpg';
            $image->move(public_path() . '/admin_assets/images/Product/', $image_name);
            $product = [
                'product_name' => $request->productname,
                'product_image' => $image_name,
                'product_desc' => $request->desc,
                'product_price' => $request->price,
                'tag_id' => $request->ctag,
            ];

       }else {
            $product = [
                'product_name' => $request->productname,
                'product_image' => '',
                'product_desc' => $request->desc,
                'product_price' => $request->price,
                'tag_id' => $request->ctag,
            ];
       }
       Product::create($product);
       return redirect('/admin/admin-product')->with('create_success', 'Create Berhasil!');
    }

    public function show($id)
    {
        $data = Product::find($id);
        return view('admin/pages/Product/dproduct', compact('data'));
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $tags = Tag::all();
        return view('admin/pages/Product/eproduct', compact('data', 'tags'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::findorfail($id);
        
        if ($request->has('image')){
        $picture = $products->product_image;
        File::delete("admin_assets/images/Products/" . $picture);
            
         $image = $request->image;
         $image_name = time() . '.jpg';
         $image->move(public_path() . '/admin_assets/images/Products/', $image_name);
            $product = [
                'product_name' => $request->productname,
                'product_image' => $image_name,
                'product_desc' => $request->desc,
                'product_price' => $request->price,
                'tag_id' => $request->tagname,
            ];

         }else {
            $product = [
                'product_name' => $request->productname,
                'product_desc' => $request->desc,
                'product_price' => $request->price,
                'tag_id' => $request->tagname,
            ];
         }
         $products->update($product);
         return redirect('/admin/admin-product')->with('edit_success', 'Edit Berhasil!');
    }

    public function destroy($id)
    {
        $products = Product::findorfail($id);
            if ($products->product_image != ''){
                $picture = $products->product_image;
                File::delete("admin_assets/images/Products/" . $picture);
            }
        Product::find($id)->delete();
        return redirect('/admin/admin-product')->with('delete_success', 'Hapus Berhasil!');
    }
}