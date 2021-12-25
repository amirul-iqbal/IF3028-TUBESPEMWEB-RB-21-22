<?php

namespace App\Http\Controllers;

use App\Models\aspek;
use App\Http\Requests\StoreaspekRequest;
use App\Http\Requests\UpdateaspekRequest;

class AspekController extends Controller
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
     * @param  \App\Http\Requests\StoreaspekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaspekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aspek  $aspek
     * @return \Illuminate\Http\Response
     */
    public function show(aspek $aspek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aspek  $aspek
     * @return \Illuminate\Http\Response
     */
    public function edit(aspek $aspek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaspekRequest  $request
     * @param  \App\Models\aspek  $aspek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaspekRequest $request, aspek $aspek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aspek  $aspek
     * @return \Illuminate\Http\Response
     */
    public function destroy(aspek $aspek)
    {
        //
    }
}
