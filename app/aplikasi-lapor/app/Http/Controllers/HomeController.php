<?php

namespace App\Http\Controllers;
use App\Models\Laporan;

class HomeController extends Controller

{
    public function index()
    {
        $laporans = Laporan::latest();

        if (request('cari')) {
            $laporans->where ('isi', 'like', '%' . request('cari') . '%');
        }

        return view('home', ["laporans" => $laporans->get()]);
    }

    public function detailLaporan(Laporan $laporan)
    {
        return view('detailLaporan', ["laporan" => $laporan]);
    }

    public function hapus(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        return redirect('/');
    }
}