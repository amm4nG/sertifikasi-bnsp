<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // menampilkan halaman dashboard
    public function index(){
        $totalPegawai = Pegawai::count();
        return view('dashboard', compact('totalPegawai'));
    }
}
