<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Aspek;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;


class CrudLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporansaya.laporansaya', [
            'daftarLaporan' => Laporan::where('user_id', auth()->user()->id)->get(),
            'daftarAspek' => Aspek::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporansaya.create', [
            'daftarAspek' => Aspek::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'aspek_id' => 'required',
            'slug' => 'required|unique:laporans',
            'isi_laporan' => 'required|min:20'
        ]);

        if ($request -> file('lampiran')) {
            $validatedData['lampiran'] = $request -> file('lampiran')->store('lampiran');
        }

        $validatedData['user_id'] = auth()->user()->id;
        

        Laporan::create($validatedData);

        return redirect('/laporansaya')->with('success', 'Laporan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporansaya)
    {   
        if($laporansaya->user_id !== auth()->user()->id) {
             abort(403);
        }
         return view('laporansaya.show', [
             'laporan' => $laporansaya,
             'daftarAspek' => Aspek::all()
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporansaya)
    {   
        if($laporansaya->user_id !== auth()->user()->id) {
             abort(403);
        }
        return view('laporansaya.edit', [
            'laporan' => $laporansaya,
            'daftarAspek' => Aspek::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporansaya)
    {
        $rules = [
            'aspek_id' => 'required',
            'isi_laporan' => 'required|min:20'
        ];

        if ($request->slug != $laporansaya->slug) {
            $rules['slug'] = 'required|unique:laporans';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request -> file('lampiran')) {
            if ($request->lampiranLama) {
                Storage::delete($request->lampiranLama);
            }
            $validatedData['lampiran'] = $request -> file('lampiran')->store('lampiran');
        }

        Laporan::where('id', $laporansaya->id)
                 ->update($validatedData);

        return redirect('/laporansaya')->with('success', 'Laporan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporansaya)
    {
        if ($laporansaya->lampiran) {
                Storage::delete($laporansaya->lampiran);
            }
        Laporan::destroy($laporansaya->id);

        return redirect('/laporansaya')->with('success', 'Laporan berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $tokens = explode(" ", $request->isi_laporan);
        $slug = SlugService::createSlug(Laporan::class, 'slug', $tokens[0]);
        return response()->json(['slug' => $slug]);
    }
}
