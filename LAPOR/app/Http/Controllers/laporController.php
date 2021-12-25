<?php

namespace App\Http\Controllers;

use App\Models\Lapor;
use Illuminate\Http\Request;

class laporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(request('keyword')){
            $lapors = Lapor::where('body', 'Like', '%'. request('keyword') . '%')->get();
        } else{
            $lapors = Lapor::orderBy('id', 'DESC')->get();
        }

        return view('index', compact('lapors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        try {
            $validated = request()->validate([
                'laporan'   => 'required',
                'aspek'  => 'required',
                'lampiran'     => 'mimes:doc,docx,xls,xlsx,ppt,pptx,pdf,jpeg,jpg,png|max:2048',
            ]);


            Lapor::create([
                'body' => $request->laporan,
                'aspek' => $request->aspek,
                'lampiran' => $request->file('lampiran')->move('lampiran', $request->file('lampiran')->hashName())
            ]);
        } catch (Exception $e) {
            return redirect()->route('index')->with('status', 'Gagal Lapor!');
        }

        return redirect()->route('index')->with('status', 'Berhasil Lapor!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lapor = Lapor::where('id', $id)->firstOrFail();
        return view('show', compact('lapor'));
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
        $lapor = Lapor::where('id', $id)->firstOrFail();

        if(\File::exists(public_path($lapor->lampiran))){
            \File::delete(public_path($lapor->lampiran));
        }

        $lapor->delete();

        return redirect()->route('index')->with('status', 'Berhasil Menghapus Lapor!');

    }
}
