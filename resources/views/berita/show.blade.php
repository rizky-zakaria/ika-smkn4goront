@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Profil {{ $berita->judul }} <a href="{{ route('berita.index') }}" class="btn btn-danger" style="float: right; margin-left: 2px"> kembali</a>
                </div>
                <div class="card-body">
                    <center>
                        <img src="{{ asset('img/' . $berita->foto) }}" alt="" width="500px" class="mt-3 mb-3">
                    </center>
                    <p>
                        {{ $berita->isi }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
