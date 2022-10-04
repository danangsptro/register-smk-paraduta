@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Jumlah Pendaftaran</h3>
                        </div>
                    </div>
                    <div class="container-fluid mt-4">
                        <a onclick="exportPdf()" class="btn btn-light btn-icon-split mb-4">
                            <span class="text">Print Laporan &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                </svg>
                            </span>
                        </a>
                        <form action="{{ route('jumlah-pendaftaran') }}" method="GET">
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <span class="input-group-addon ">Start: &nbsp;</span>
                                        <input type="date" class="form-control date" placeholder="yyyy-mm-dd"
                                            value="{{ Request::get('start') ? Request::get('start') : '' }}"
                                            name="start" />
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">End: &nbsp;</span>
                                        <input type="date" class="form-control date" placeholder="yyyy-mm-dd"
                                            value="{{ Request::get('end') ? Request::get('end') : '' }}" name="end" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-dark" type="submit">Search</button>
                                    @if (Request::get('start') and Request::get('end'))
                                        <a href="{{ route('jumlah-pendaftaran') }}" type="submit" class="btn btn-danger"
                                            style="margin-left: 0.5em">Clear filter</a>
                                    @endif
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">Nama Calon Siswa</th>
                                        <th class="wd-15p">Kelengkapan Data</th>
                                        <th class="wd-15p">Status</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jumlahPendaftaran as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_calon_siswa }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" class=" m-1" data-toggle="modal"
                                                        data-target="#edit{{ $loop->iteration }}"
                                                        style="border-radius: 5rem">
                                                        {{ $item->asal_sekolah ? 'Detail!' : '-' }}

                                                    </a>
                                                    <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="edit{{ $loop->iteration }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-dark">
                                                                    <h5 class="modal-title"
                                                                        id="edit{{ $loop->iteration }}Label">Kelengkapan
                                                                        Data : <strong>
                                                                            {{ $item->nama_calon_siswa }}</strong>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body modal-xl">
                                                                    <div class="form-row">
                                                                        <div class="col-lg-6">
                                                                            <label>Nama Calon Siswa</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->nama_calon_siswa }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <label>Asal Sekolah</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->asal_sekolah }}" readonly>
                                                                        </div>

                                                                        @if ($item->jurusan)
                                                                            <div class="col-lg-6 mt-4">
                                                                                <label>Jurusan</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $item->jurusan->nama_jurusan }}"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="col-lg-6 mt-4">
                                                                                <label>Kelas</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $item->kelas->nama_kelas }}"
                                                                                    readonly>
                                                                            </div>
                                                                        @else
                                                                            -
                                                                        @endif

                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>No Telp Siswa</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->no_telp_siswa }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>Tahun Lulus</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->tahun_lulus }}" readonly>
                                                                        </div>
                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>Nama Orang Tua</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->nama_orang_tua }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>No Telp Orang Tua</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->no_telp_orang_tua }}"
                                                                                readonly>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>Ijazah</label>
                                                                            <br>
                                                                            <a href="{{ Storage::url($item->ijazah) }}"
                                                                                target="_blank">
                                                                                <img width="200" height="200"
                                                                                    border="0" align="center"
                                                                                    src="{{ Storage::url($item->ijazah) }}" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-6 mt-4">
                                                                            <label>Skhun</label>
                                                                            <br>
                                                                            <a href="{{ Storage::url($item->skhun) }}"
                                                                                target="_blank">
                                                                                <img width="200" height="200"
                                                                                    border="0" align="center"
                                                                                    src="{{ Storage::url($item->skhun) }}" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-4">
                                                                            <label>Foto</label>
                                                                            <br>
                                                                            <a href="{{ Storage::url($item->foto) }}"
                                                                                target="_blank">
                                                                                <img width="200" height="200"
                                                                                    border="0" align="center"
                                                                                    src="{{ Storage::url($item->foto) }}" />
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->status->nama_status }}</td>
                                            <td>
                                                @if ($item->status_id === 4)
                                                    <form
                                                        action="{{ route('update-statusJumlahPendaftaran', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-success"
                                                            onclick="return confirm('Yakin Ingin Update ?')">
                                                            Update
                                                        </button>
                                                    </form>
                                                @else
                                                    -
                                                @endif
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


@section('script')
    <script type="text/javascript">
        function exportPdf() {
            var start = $('input[name=start]').val();
            var end = $('input[name=end]').val();
            var url = "{{ route('printJumlahPendaftaran') }}?start=" + start + "&end=" + end;
            return window.open(url, '_blank');
        }
    </script>
@endsection
