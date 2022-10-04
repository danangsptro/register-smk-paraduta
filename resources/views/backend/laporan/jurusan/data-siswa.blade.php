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
                    <div></div>
                    <div class="card-body">
                        <div>
                            <a onclick="exportPdf()" class="btn btn-light btn-icon-split mb-4">
                                <span class="text">Print Laporan &nbsp; <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-printer"
                                        viewBox="0 0 16 16">
                                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                        <path
                                            d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                    </svg>
                                </span>
                            </a>
                            <form action="{{ route('data-siswa', $namaKelas->id) }}" method="GET">
                                <div class="row mt-2">
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Start: &nbsp;</span>
                                            <input type="date" class="form-control date" placeholder="yyyy-mm-dd"
                                                value="{{ Request::get('start') ? Request::get('start') : '' }}"
                                                name="start" />
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">End: &nbsp;</span>
                                            <input type="date" class="form-control date" placeholder="yyyy-mm-dd"
                                                value="{{ Request::get('end') ? Request::get('end') : '' }}"
                                                name="end" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-success" type="submit">Search</button>
                                        @if (Request::get('start') and Request::get('end'))
                                            <a href="{{ route('data-siswa', $namaKelas->id) }}" type="submit"
                                                class="btn btn-danger" style="margin-left: 0.5em">Clear filter</a>
                                        @endif
                                    </div>

                                </div>
                            </form>
                        </div>
                        <br>
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

@section('script')
    <script type="text/javascript">
        function exportPdf() {
            var start = $('input[name=start]').val();
            var end = $('input[name=end]').val();
            var url = "{{ route('print-data-siswa',$namaKelas->id) }}?start=" + start + "&end=" + end;
            return window.open(url, '_blank');
        }
    </script>
@endsection
