<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use PDF;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::all();
        $modul = 'Data Agenda';
        return view('agenda/index', compact('data', 'modul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('table_agenda')->insert([
            'judul' => $request->judul,
            'teruntuk' => $request->teruntuk,
            'tgl_agenda' => $request->tgl_agenda,
            'isi' => $request->isi,
            'tempat_agenda' => $request->tempat_agenda
        ]);
        Alert::success('Berhasil', 'Berhasil Menambahan Data');
        return redirect(route('agenda.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modul = 'Detail Agenda';
        $agenda = Agenda::findOrFail($id);
        return view('agenda.show', compact('agenda', 'modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agenda.edit', ['agenda' => $agenda]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $agenda = Agenda::find($id)->update($request->all());
        return redirect(route('agenda.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();

        Alert::success('Berhasil', 'Berhasil Menambahan Data');
        return redirect(route('agenda.index'));
    }

    public function pdf($id)
    {
        // $agenda = Agenda::findOrFail($id);
        // $pdf = PDF::loadview('agenda.pdf')->setPaper('folio', 'portrait', 'A4')
        //     ->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->stream();


        // $pdf = PDF::loadview('alumni.show', ['alumni' => $alumni]);
        // return $pdf->download('detail-alumni-pdf');


        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('agenda.pdf', compact(''));

        return $pdf->stream();
    }
}
