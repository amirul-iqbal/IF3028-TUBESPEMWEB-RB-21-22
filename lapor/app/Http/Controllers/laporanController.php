<?php

namespace App\Http\Controllers;

use App\Models\aspek;
use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = laporan::all();
        return view('lapor\index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aspek = aspek::all();
        return view('buatlapor',compact('aspek'));
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
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        $detail = \App\Models\laporan::select('*','laporan.tgl_kejadian as tanggal')->where(['id_laporan' => $laporan->id_laporan])->first();
        return view('detail',compact('detail','laporan'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }
}
