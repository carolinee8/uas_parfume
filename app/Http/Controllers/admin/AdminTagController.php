<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\File;

class AdminTagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin/pages/Tag/admin-tag', compact('tags'));
    }

    public function create()
    {
        return view('admin/pages/Tag/ctag');
    }

    public function store(Request $request)
    {
        $tag = [
            'tag_name' => $request->tagname
        ];
       Tag::create($tag);
       return redirect('/admin/admin-tag')->with('create_success', 'Create Berhasil!');
    }

    // public function show($id)
    // {
    //     $data = Tag::find($id);
    //     return view('admin/pages/Tag/dtag', compact('data'));
    // }

    public function edit($id)
    {
        $data = Tag::find($id);
        $tags = Tag::all();
        return view('admin/pages/Tag/etag', compact('data', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $tags = Tag::findorfail($id);

        $tag = [
            'tag_name' => $request->tagname,
        ];
         $tags->update($tag);
         return redirect('/admin/admin-tag')->with('edit_success', 'Edit Berhasil!');
    }

    public function destroy($id)
    {
        Tag::find($id)->delete();
        return redirect('/admin/admin-tag')->with('delete_success', 'Hapus Berhasil!');
    }
}