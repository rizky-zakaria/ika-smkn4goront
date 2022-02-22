@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pengisian Agenda</h5>

                    <!-- General Form Elements -->
                    <form action="{{ url('home/agenda', $agenda->id) }}" method="POST">
                        @csrf
                        $@method('PUT')
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" value="{{ $agenda->judul }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px" name="isi">{{ $agenda->isi }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_agenda" value="{{ $agenda->tgl_agenda }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tempat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_agenda" value="{{ $agenda->tempat_agenda }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Teruntuk</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="teruntuk">
                                    <option selected>{{ $agenda->teruntuk }}</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="Semua">Semua</option>
                                </select>
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
