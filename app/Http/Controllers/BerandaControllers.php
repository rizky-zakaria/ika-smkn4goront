<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaControllers extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function profil()
    {
        return view('pages.profil');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function agenda()
    {
        return view('pages.agenda');
    }

    public function kepengurusan()
    {
        return view('pages.kepengurusan');
    }
}
