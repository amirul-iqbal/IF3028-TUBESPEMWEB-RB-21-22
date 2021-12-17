<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Aspek;

class BuatLaporanController extends Controller

{
    public function index()
    {
        return view('buatLaporan', [
            'aspeks' => Aspek::all()
        ]);
    }

    public function simpan(Request $request)
    {

        Laporan::create ([
            'pelapor' => $request->pelapor,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'aspek_id' => $request->aspek_id,
            'lampiran' => $request->lampiran
        ]);

        return redirect('/');
    }
}