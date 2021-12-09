<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatLaporanController extends Controller

{
    public function index()
    {
        return view('buatLaporan');
    }
}