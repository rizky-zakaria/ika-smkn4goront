<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Alumni;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Alumni::all();
        $modul = 'Data Alumni';
        return view('alumni.index', compact('data', 'modul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agama = Agama::all();
        $pekerjaan = Pekerjaan::all();
        $modul = 'Tambah Data Alumni';
        return view('alumni.create', compact('agama', 'pekerjaan', 'modul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'post_title' => 'required',
        //     'category' => 'required',
        // ]);

        $alumni = new Alumni();
        $alumni->nama = $request->nama;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->jk = $request->jk;
        $alumni->pekerjaan = $request->pekerjaan;
        $alumni->nomor_hp = $request->nomor_hp;
        $alumni->agama = $request->agama;
        $alumni->thn_angkatan = $request->thn_angkatan;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = date('YmdHis') . $image->getClientOriginalName();
            $image->move('img', $name);
            $alumni->foto = $name;
        }
        // dd($request);
        $alumni->save();
        return redirect()->route('alumni.index')->with('success', 'Berhasil Menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        // dd($alumni);
        $modul = 'Detail Data Alumni';
        return view('alumni.show', compact('alumni', 'modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return view('alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //boleh pake validate

        // $input = $request->all();
        // if ($foto = $request->file('foto')) {
        //     $destinationPath = 'img/';
        //     $name = date('YmdHis') . "." . $foto->getClientOriginalName();
        //     $foto->move($destinationPath, $name);
        //     $input['foto'] = $name;
        // } else {
        //     unset($input['foto']);
        // }
        dd($request);
        // $alumni->update($input);


        $alumni = new Alumni();
        $alumni->nama = $request->nama;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->jk = $request->jk;
        $alumni->pekerjaan = $request->pekerjaan;
        $alumni->nomor_hp = $request->nomor_hp;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = date('YmdHis') . $image->getClientOriginalName();
            $image->move('img', $name);
            $alumni->foto = $name;
        }
        $alumni->update();
        return redirect()->route('alumni.index')->with('success', 'Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();

        Alert::success('Berhasil', 'Berhasil Menghapus Data');
        return redirect(route('alumni.index'));
    }

    public function cetak_pdf($id)
    {
        // dd($id);
        $alumni = Alumni::findOrFail($id);
        $pdf = PDF::loadview('alumni.pdf', compact('alumni'))->setPaper('L', 'portrait', 'A4')
            ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true]);
        // return $pdf->download('lampiran_sk_' . $sk->no_sk . '.pdf');
        return $pdf->stream();
        // $pdf = PDF::loadview('alumni.show', ['alumni' => $alumni]);
        // return $pdf->download('detail-alumni-pdf');
    }
}
