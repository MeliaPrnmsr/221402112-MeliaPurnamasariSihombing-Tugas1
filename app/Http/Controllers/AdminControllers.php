<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return view('Admin\dashboard');
        return view('admin.dashboard');
    }

    public function show_profil()
    {
        //Return view('Admin\dashboard');
        return view('admin.profil');
    }

    public function show_layanan()
    {
        
        return view('admin.layanan');
    }

    public function show_aktivitas()
    {
        
        return view('admin.aktivitas');
    }

    public function show_agenda()
    {
        
        return view('admin.agenda');
    }

    public function show_koleksiumum()
    {
        
        return view('admin.koleksiumum');
    }

    public function show_bukubaru()
    {
        
        return view('admin.bukubaru');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function daftar()
    {
       //
    }
}
