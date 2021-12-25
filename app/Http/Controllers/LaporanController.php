<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Aspek;
use App\Models\User;

class LaporanController extends Controller {
	
	public function index(){

		$title = '';
		if (request('aspek')) {
			$aspek = Aspek::firstWhere('slug', request('aspek'));
			$title = "Daftar laporan dengan Aspek Laporan : " . $aspek->aspek_laporan;
		}

		if (request('user')) {
			$user = User::firstWhere('username', request('user'));
			$title = "Daftar laporan yang dilaporkan oleh : " . $user->name;
		}


		return view('home', [
			"title" => $title,
			"dataLaporan" => Laporan::latest()->filter(request(['cari', 'aspek', 'user']))->paginate(5)->withQueryString(),
			"daftarAspek" => Aspek::all()
		]);
	}

	public function show(Laporan $laporan){
		return view('laporan', ["laporan" => $laporan, "daftarAspek" => Aspek::all() ] );
	}


}

