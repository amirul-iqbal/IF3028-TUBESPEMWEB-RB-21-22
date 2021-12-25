<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use App\Models\Aspek;
use Illuminate\Support\Facades\Storage;

class EditLaporanController extends Controller

{
    public function index(Laporan $laporan)
    {
        return view('editLaporan', 
        ["laporan" => $laporan],
        ["aspeks" => Aspek::all()]
    );
    }
}