<?php

namespace App\Http\Controllers;

use App\Models\AdminManagement;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ini halaman admin management';
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminManagement  $adminManagement
     * @return \Illuminate\Http\Response
     */
    public function show(AdminManagement $adminManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminManagement  $adminManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminManagement $adminManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminManagement  $adminManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminManagement $adminManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminManagement  $adminManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminManagement $adminManagement)
    {
        //
    }
}
