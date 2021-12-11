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
			'lampiran' => 'required|file|image|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
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

    public function update($id) {
        $report = Report::find($id);
        return view('edit', ['report' => $report]);
    }

    public function updated($id, Request $request) {
        $report = Report::find($id);
        $this->validate($request, [
			'lampiran' => 'required|string|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('lampiran');
 
		$filename = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$folder = public_path('lampiran');
        $file->move($folder, $filename);

        $report->excerpt = substr($request->laporan, 0, 200);
        $report->body = $request->laporan;
        $report->aspek = $request->aspek;
        $report->lampiran = $filename;
        $report->save();
        return redirect('/');
    }

    public function delete($id) {
        $report = Report::find($id);
        $report->delete();
        return redirect('/');
    }
}
