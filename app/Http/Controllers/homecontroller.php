<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use App\Models\siswa;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $sekolah = sekolah::all();
        return view('home', [
            'title' => 'Skomda | Login',
            'siswa' => $sekolah,
        ]);
    }
    public function tentang()
    {
        return view('tentang', [
            'title' => 'Skomda | Siswa',
        ]);
    }
    public function daftar()
    {
        return view('daftar', [
            'title' => 'Skomda | Daftar',
        ]);
    }
}