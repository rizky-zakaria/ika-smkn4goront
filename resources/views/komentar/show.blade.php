@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profil {{ $alumni->nama }} <a href="{{ route('alumni.index') }}" class="btn btn-danger" style="float: right; margin-left: 2px">Kembali</a><a href="{{ url('home/alumni/cetak_pdf', $alumni->id) }}" class="btn btn-primary" style="float: right">Cetak PDF</a></h5>

                    <div class="row">
                        <div class="col-sm-2">
                            <img src="{{ asset('img/' . $alumni->foto) }}" width="150" class="img-thumbnail">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-2">
                                    Nama
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->nama }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Tanggal Lahir
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->tgl_lahir }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Tempat Lahir
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->tempat_lahir }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Alamat
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->alamat }}</b>
                                </div>
                                <div class="col-sm-2">
                                    agama
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->agama }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Jenis Kelamin
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->jk }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Pekerjaan
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->pekerjaan }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Ponsel
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->nomor_hp }}</b>
                                </div>
                                <div class="col-sm-2">
                                    Tahun Lulus
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-9">
                                    <b>{{ $alumni->thn_angkatan }}</b>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
