<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.index');
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
}
