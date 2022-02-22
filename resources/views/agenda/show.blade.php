@extends('master/template')
@section('konten')
    <div class="card">
        <div class="card-header">
            <h5>{{ $agenda->judul }} <a href="{{ url('home/agenda/cetak_pdf/' . $agenda->id) }}" class="btn btn-primary" style="float: right">Unduh Undangan</a><a href="{{ route('agenda.index') }}" class="btn btn-danger" style="float: right; margin-right: 2px">Kembali</a></h5>
        </div>
        <div class="card-body">
            <p>{{ $agenda->isi }}</p>
            <p>Tempat : {{ $agenda->tempat_agenda }}</p>
            <p>Tanggal : {{ $agenda->tgl_agenda }}</p>
            <p>Teruntuk : Angkatan {{ $agenda->teruntuk }}</p>
        </div>
    </div>
@endsection
