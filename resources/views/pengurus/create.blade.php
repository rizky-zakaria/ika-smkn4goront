@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pengisian Agenda</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('kepengurusan.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Alumni</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="id_alumni">
                                    <option selected>Pilih Alumni</option>
                                    @foreach ($alumni as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Periode</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="periode">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sambutan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px" name="sambutan"></textarea>
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
