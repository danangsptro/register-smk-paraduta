@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">
        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title">Invoice</h1>
        </div>
        <!-- End page-header -->
        <!-- Row -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Data Table</h3>
                        </div>
                    </div>
                    <div class="container-fluid mt-4">

                        <a href="{{route('print-invoice-siswa')}}" target="_blank" class="btn btn-light btn-icon-split mb-4">
                            <span class="text">Print Invoice &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">Nama</th>
                                        <th class="wd-15p">No Invoice Formulir</th>
                                        <th class="wd-25p">Ket Formulir</th>
                                        <th class="wd-15p">No Invoice Register</th>
                                        <th class="wd-25p">Ket Pendaftaran</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $formPendaftaran->nama_calon_siswa }}</td>
                                        <td>{{ $invoice->no_invoice_formulir }}</td>
                                        <td>
                                            @if ($invoice->status_id >= 3)
                                                <span class="badge badge-success">Lunas</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $invoice->no_invoice_pendaftaran ?? '-' }}</td>
                                        <td>
                                            @if ($invoice->status_id >= 7)
                                                <span class="badge badge-success">Lunas</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
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
