@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pengisian Agenda</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="jk" required>
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="agama" required>
                                    <option selected>Pilih Agama</option>
                                    @foreach ($agama as $a)
                                    <option value="{{ $a->agama }}">{{ $a->agama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="thn_angkatan" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="pekerjaan" required>
                                    <option selected>Pilih Pekerjaan</option>
                                    @foreach ($pekerjaan as $p)
                                    <option value="{{ $p->pekerjaan }}">{{ $p->pekerjaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_hp" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="formFile" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="foto" required>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
                        <a href="{{ route('agenda.index') }}" class="btn btn-danger">Back</a>
                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
