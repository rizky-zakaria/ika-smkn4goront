@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="container">
                    <h5 class="card-title">Agenda<a href="{{ route('berita.create') }}" class="btn btn-primary"
                        style="float: right">Tambah Data</a></h5>
                </div>
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ ($key+1) }}</th>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <img src="{{ asset('img/' . $item->foto ) }}" alt="" width="150px">
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <a href="{{ route('berita.show', $item->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    {{--

                        <div class="container">
                            <div class="row">
                                @foreach ($data as $item)
                                <div class="col">
                                    <div class="card" style="width: 15rem;">
                                        <img src="{{ asset('img/' . $item->foto ) }}" class="card-img-top">
                                        <div class="card-body">
                                            <h5>{{ $item->judul }}</h5>
                                            <a href="{{ route('berita.show', $item->id) }}" class="text-secondary"><i>Baca Selengkapnya...</i></a>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-success float-end"><i class="bi bi-pencil"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus Ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ url('home/berita', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        --}}
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
