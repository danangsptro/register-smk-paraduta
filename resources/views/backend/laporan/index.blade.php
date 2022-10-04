@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Laporan Calon Siswa</h3>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Laporan Calon Siwa</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">Foto</th>
                                        <th class="wd-15p">Nama Calon Siswa</th>
                                        <th class="wd-15p">Asal Sekolah</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td width="120px">
                                                <img src="{{ Storage::url($item->foto) }}" width="100%" alt="">
                                            </td>
                                            <td>{{ $item->nama_calon_siswa }}</td>
                                            <td>{{ $item->asal_sekolah }}</td>
                                            <td>
                                                {{-- @if (Auth::user()->user_role != 'kepalasekolah')
                                                    <a href="{{ route('laporanPindahJurusan', $item->id) }}"
                                                        class="btn btn-dark btn-sm">Pindah Jurusan</a>
                                                @else
                                                    -
                                                @endif --}}
                                                -
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End-->
    </div>

@endsection
