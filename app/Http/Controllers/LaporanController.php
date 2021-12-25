<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller {
	
	public function index(){
		return view('home', [
		//"showSemuaLaporan" => Laporan::all();
			"title" => "Semua Laporan",
			"dataLaporan" => Laporan::latest()->get()
		]);
	}

	public function show(Laporan $laporan){
		return view('laporan', ["laporan" => $laporan ] );
	}


}

