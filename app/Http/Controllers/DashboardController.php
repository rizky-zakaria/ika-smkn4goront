<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $modul = 'Dashboard';
        $komentar = DB::table('table_komentar')->count('id');
        $komentar_tahun = DB::table('table_komentar')
            ->where('waktu_post', date('Y'))
            ->count('id');
        $agenda = DB::table('table_agenda')->count('id');
        $agenda_tahun = DB::table('table_agenda')
            ->where('waktu_post', date('Y'))
            ->count('id');
        $alumni = DB::table('table_alumni')->count('id');
        $alumni_tahun = DB::table('table_alumni')
            ->where('thn_angkatan', date('Y'))
            ->count('id');
        return view('dashboard.index', compact('modul', 'komentar', 'komentar_tahun', 'agenda', 'agenda_tahun', 'alumni', 'alumni_tahun'));
    }

    public function show($id)
    {
        //
    }
}
