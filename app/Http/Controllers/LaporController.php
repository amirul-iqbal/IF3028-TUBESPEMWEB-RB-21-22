<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporController extends Controller
{
    public function index() {
        $reports = DB::table('reports')->get();

        return view('home', ['reports' => $reports]);
    }

    public function laporan() {
        return view('lapor');
    }

    public function show() {
        return view('view-laporan');
    }
}
