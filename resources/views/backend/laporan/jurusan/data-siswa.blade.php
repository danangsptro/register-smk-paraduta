@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Data Kelas {{ $namaKelas->nama_kelas }}</h3>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="icon-service2 bg-primary br-3">
                                            <i class="fe fe-user text-white fs-30"></i>
                                        </div>

                                        </p>
                                    </div>
                                    <div class="col-lg-10">

                                        <h4>Sisa kouta {{ $namaKelas->nama_kelas }}</h4>
                                        <strong class="text-info">
                                            {{ $namaKelas->jumlah_siswa }}
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="icon-service2 bg-success br-3">
                                            <i class="fe fe-users text-white fs-30"></i>
                                        </div>

                                        </p>
                                    </div>
                                    <div class="col-lg-10">

                                        <h4>Jumlah Siswa {{ $namaKelas->nama_kelas }}</h4>
                                        <strong class="text-info">
                                            {{ $siswa->count() }}
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Laporan Siswa</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">Foto</th>
                                        <th class="wd-15p">Nama Siswa</th>
                                        <th class="wd-15p">Jurusan</th>
                                        <th class="wd-15p">Kelas</th>
                                        <th class="wd-15p">Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td width="120px">
                                                <img src="{{ Storage::url($item->foto) }}" width="100%" alt="">
                                            </td>
                                            <td>{{ $item->nama_calon_siswa }}</td>
                                            <td>{{ $item->jurusan->nama_jurusan }}</td>
                                            <td>{{ $item->kelas->nama_kelas }}</td>
                                            <td>{{ $item->asal_sekolah }}</td>
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
