@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Bukti Invoice</h3>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Bukti Invoice</h3>
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
                                        {{-- <th class="wd-25p">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_calon_siswa }}</td>
                                            <td class="text-center">
                                                <a href="{{ Storage::url($item->bukti_transfer_1) }}" target="_blank">
                                                    <img width="70" height="70" border="0" align="center"
                                                        src="{{ Storage::url($item->bukti_transfer_1) }}" style="border-radius: 1rem; border:4px solid salmon;" />
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
                                                    <img width="70" height="70" border="0" align="center"
                                                        src="{{ Storage::url($item->bukti_transfer_2) }}" style="border-radius: 1rem; border:4px solid salmon;" />
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
                                            {{-- <td>
                                                <form action="{{ route('update-invoice-tf1', $item->id) }}" method="post">
                                                    @csrf
                                                    @if ($item->validasi_bukti_transfer_1 === 'menunggu')
                                                        <button class="btn btn-primary" type="submit">Update TF1</button>
                                                    @elseif ($item->validasi_bukti_transfer_1 === 'setujui')
                                                        <i>
                                                            Sudah Di setujui validasi TF1

                                                        </i>
                                                    @endif
                                                </form>
                                            </td> --}}
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
