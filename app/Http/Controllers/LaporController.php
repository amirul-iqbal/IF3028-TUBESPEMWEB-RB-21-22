<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class LaporController extends Controller
{

    public function laporan() {
        return view('lapor');
    }

    public function show($id) {
        $report = Report::find($id);
        return view('view-laporan', ['report' => $report]);
    }

    public function index(){
		$reports = Report::all();
		return view('home',['reports' => $reports]);
	}
 
	public function store(Request $request){
		$this->validate($request, [
			'lampiran' => 'file|image|mimes:jpeg,png,jpg,pdf|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('lampiran');
 
		$filename = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$folder = public_path('lampiran');
        $file->move($folder, $filename);
 
		Report::create([
            'excerpt' => substr($request->laporan, 0, 200),
            'body' => $request->laporan,
            'aspek' => $request->aspek,
			'lampiran' => $filename
		]);
        
		return redirect('/');
	}
}
