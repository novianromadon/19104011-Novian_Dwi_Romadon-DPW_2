<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        // Menuju ke view beranda
        return view('beranda');
    }

    public function about() {
        return view('about');
    }

    public function mahasiswa() {
        return view('student');
    }
}
