<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $slider = DB::table('table_berita')->limit(3)->get();
        $side = DB::table('table_berita')->limit(5)->get();
        $galeri = DB::table('table_berita')->limit(6)->get();
        // dd($slider);

        return view('pages.index', compact('slider', 'side', 'galeri'));
    }

    public function detail_berita()
    {
        //
    }

    public function profil()
    {
        return view('pages.profil');
    }

    public function pengurus()
    {
        return view('pages.kepengurusan');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function agenda()
    {
        return view('pages.agenda');
    }

    public function livesearch()
    {
        // $berita = Berita::all();
        // return view('index', compact('berita'));
    }
}
