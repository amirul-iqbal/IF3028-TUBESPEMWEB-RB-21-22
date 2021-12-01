<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    public function index() {
        return view('home');
    }

    public function laporan() {
        return view('lapor');
    }

    public function show() {
        return view('view-laporan');
    }
}
