<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;

class HomeController extends Controller
{
    public function index()
    {
      return view('home.index');
    }
    public function gioithieu(){
        return view('home.gioithieu');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehomeRequest  $request
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehomeRequest $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(home $home)
    {
        //
    }
}
