<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Http\Requests\StoreAcaraRequest;
use App\Http\Requests\UpdateAcaraRequest;

class AcaraController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $acaras = Acara::latest();

        if(request('search_acara')){
            $acaras->where('acara_title', 'like', '%' . request('search_acara') . '%')
                    ->orWhere('acara_desc', 'like', '%' . request('search_acara') . '%');
        }

        return view('acara', [
            "title" => "Acara",
            "active"=> "acara",
            // "acara" => Acara::all()
            "acara" => $acaras->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAcaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcaraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        return view('detail_acara', [
            "title" => "Detail Acara",
            "active"=> "acara",
            "detail_acara" => $acara
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $acara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcaraRequest  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcaraRequest $request, Acara $acara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        //
    }
}
