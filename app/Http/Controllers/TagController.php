<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function index()
    {
        return view('tag', [
            "tag" => Tag::all()
        ]);
    }

    public function show(Tag $tag)
    {
        return view('detail_tag', [
            "title" => "Detail Tag",
            "detail_tag" => $tag
        ]);
    }
}
