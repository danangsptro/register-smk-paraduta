@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Approve Data Status Pendaftaran</h3>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Approve</h3>
                        </div>
                    </div>
                    <div class="card-header">
                        <div>
                            <p><strong>List Jenis Status :</strong></p>
                            <ol>
                                <li>Belum Bayar Formulir Pendaftaran</li>
                                <li>Sudah Bayar Formulir Pendaftaran</li>
                                <li>Menerima Formulir Pendaftaran</li>
                                <li>Sudah Register Pendaftaran</li>
                                <li>Belum Bayar Pendaftaran</li>
                                <li>Sudah Bayar Pendaftaran</li>
                                <li>Sudah Diterima</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">Nama Calon Siswa</th>
                                        <th class="wd-15p text-center">Tf 1</th>
                                        <th class="wd-15p">Validasi Tf1</th>
                                        <th class="wd-15p">Tf 2</th>
                                        <th class="wd-15p">Validasi Tf2</th>
                                        <th class="wd-15p">Status Terakhir</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_calon_siswa }}</td>
                                            <td class="text-center">
                                                <a href="{{ Storage::url($item->bukti_transfer_1) }}" target="_blank">
                                                    <img width="50" height="50" border="0" align="center"  src="{{ Storage::url($item->bukti_transfer_1) }}" style="border-radius: 1rem; border:4px solid salmon;" />
                                                  </a>
                                            </td>
                                            <td>
                                                @if ($item->validasi_bukti_transfer_1 === 'menunggu')
                                                    <span class="badge badge-warning">
                                                        {{ $item->validasi_bukti_transfer_1 }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-success">
                                                        {{ $item->validasi_bukti_transfer_1 }}
                                                    </span>
                                                @endif
                                            </td>


                                            <td class="text-center">
                                                <a href="{{ Storage::url($item->bukti_transfer_2) }}" target="_blank">
                                                    <img width="50" height="50" border="0" align="center"  src="{{ Storage::url($item->bukti_transfer_2) }}" style="border-radius: 1rem; border:4px solid salmon;" />
                                                  </a>
                                            </td>
                                            <td>
                                                @if ($item->validasi_bukti_transfer_2 === 'menunggu')
                                                    <span class="badge badge-warning">
                                                        {{ $item->validasi_bukti_transfer_2 }}
                                                    </span>
                                                @elseif($item->validasi_bukti_transfer_2 === 'setujui')
                                                    <span class="badge badge-success">
                                                        {{ $item->validasi_bukti_transfer_2 }}
                                                    </span>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td><span class="badge badge-dark">{{ $item->status_id }}</span> -
                                                {{ $item->status->nama_status }}</td>
                                            <td>
                                                @if ($item->validasi_bukti_transfer_1 === 'menunggu' && Auth::user()->user_role === 'panitia')
                                                    <form action="{{ route('update-invoice-tf1', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary" type="submit">Update TF1</button>
                                                    </form>
                                                @elseif($item->validasi_bukti_transfer_2 === 'menunggu' && Auth::user()->user_role === 'tu')
                                                    <form action="{{ route('update-invoice-tf2', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary" type="submit">Update TF2</button>
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
