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
                                            <td>
                                                <a href="#" class="m-1 " data-toggle="modal"
                                                    data-target="#edit{{ $loop->iteration }}">
                                                    {{ $item->bukti_transfer_1 ? 'Detail!' : '-' }}
                                                </a>
                                                <div class="d-flex justify-content-center text-center">
                                                    <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="edit{{ $loop->iteration }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="edit{{ $item->iteration }}Label">Bukti
                                                                        Pembayaran Formulir Pendaftaran : <strong>
                                                                            {{ $item->nama_calon_siswa }}</strong>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-row">
                                                                        <img src="{{ Storage::url($item->bukti_transfer_1) }}"
                                                                            width="100%" alt="">
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


                                            <td>
                                                <a href="" class=" m-1" data-toggle="modal"
                                                    data-target="#edit{{ $loop->iteration }}" style="border-radius: 5rem">
                                                    {{ $item->bukti_transfer_2 ? 'Lihat!' : '-' }}

                                                </a>
                                                <div class="d-flex justify-content-center text-center">
                                                    <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="edit{{ $loop->iteration }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="edit{{ $item->iteration }}Label">Bukti
                                                                        Pembayaran Formulir Pendaftaran : <strong>
                                                                            {{ $item->nama_calon_siswa }}</strong>
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-row">
                                                                        <img src="{{ Storage::url($item->bukti_transfer_2) }}"
                                                                            width="100%" alt="">
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
                                                @if ($item->validasi_bukti_transfer_1 === 'menunggu')
                                                    <form action="{{ route('update-invoice-tf1', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary" type="submit">Update TF1</button>
                                                    </form>
                                                @elseif($item->validasi_bukti_transfer_2 === 'menunggu')
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
