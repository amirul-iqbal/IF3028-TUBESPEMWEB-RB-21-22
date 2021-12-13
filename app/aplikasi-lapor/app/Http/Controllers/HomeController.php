<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class HomeController extends Controller

{
    public function index()
    {
        return view('home', ["laporans" => Laporan::all()]);
    }

    public function detail($id)
    {
        $laporan = $this->index();
        return view('detail', ["laporan" => Laporan::find($id)]);
    }
}