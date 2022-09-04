@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- Row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3>Invoice</h3>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table Invoice</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">No Invoice - F</th>
                                        <th class="wd-15p">No Invoice - P</th>
                                        <th class="wd-15p">Nama Calon Siswa</th>
                                        <th class="wd-15p">Jenis Biaya</th>
                                        <th class="wd-15p">Status</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->no_invoice_formulir }}</td>
                                            <td>{{ $item->no_invoice_pendaftaran ?? '-' }} </td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->jenisBiaya->jenis_biaya }}</td>
                                            <td>{{ $item->status->nama_status }}</td>
                                            <td>-</td>
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
