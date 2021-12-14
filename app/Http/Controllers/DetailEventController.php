<?php

namespace App\Http\Controllers;

use App\Models\DetailEvent;
use App\Http\Requests\StoreDetailEventRequest;
use App\Http\Requests\UpdateDetailEventRequest;

class DetailEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDetailEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailEvent  $detailEvent
     * @return \Illuminate\Http\Response
     */
    public function show(DetailEvent $detailEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailEvent  $detailEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailEvent $detailEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailEventRequest  $request
     * @param  \App\Models\DetailEvent  $detailEvent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailEventRequest $request, DetailEvent $detailEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailEvent  $detailEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailEvent $detailEvent)
    {
        //
    }
}
