@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <br>
        <div class="text-center container mt-4">
            <div class="card" style="border-radius: 0.5rem;">
                <h1 class="mt-4">Laporan Jurusan</h1>

            </div>
        </div>
        <div class="container">
            <div class="row py-4">
                @foreach ($laporan as $item)
                    <div class="col-lg-6">
                        <div class="card text-center bg-dark" style="border-radius: 1rem">
                            <i class="icon icon-book-open mt-4 fs-30" data-toggle="tooltip" title="icon-book-open"></i>

                            <h3 class="mt-4">{{ $item->nama_jurusan }}</h3>
                            <a href="{{ route('laporan-kelas', $item->id) }}" class="btn btn-light mt-2"
                                style="border-radius: 2rem;">Lihat</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
