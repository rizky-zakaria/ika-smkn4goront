@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pengisian Agenda</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" required value="{{ old('nama', $alumni->nama) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="jk" required>
                                    <option selected value="{{ $alumni->jk }}">{{ $alumni->jk }}</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', $alumni->tgl_lahir) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Teruntuk</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="pekerjaan"
                                    required>
                                    <option selected value="{{ $alumni->pekerjaan }}">{{ $alumni->pekerjaan }}</option>
                                    <option value="ASN / TNI / POLRI">ASN / TNI / POLRI</option>
                                    <option value="Pegawai Pemerintah">Pegawai Pemerintah</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Lainnya.">Lainnya.</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_hp" value="{{ old('nomor_hp', $alumni->nomor_hp) }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">
                                Foto
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile" name="foto">
                                <i class="text-danger"><b>*</b>kosongkan jika tidak ingin diganti!</i>
                            </div>
                            <img src="{{ asset('img/' . $alumni->foto) }}" alt="" width="20" class="col-sm-2">
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
                        <a href="{{ route('alumni.index') }}" class="btn btn-danger">Back</a>
                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
