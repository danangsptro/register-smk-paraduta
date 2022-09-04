@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">

        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title">Kelas</h1>
            <div class="ml-auto">
                <div class="input-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span>
                            <i class="fe fe-plus"><strong> Create</strong></i>
                        </span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Kelas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('kelas-store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama Jurusan:</label>
                                                <div class="col-lg-12">
                                                    <select class="fs-14 form-control fs-14 r-0 light"
                                                        id="jurusan_id" name="jurusan_id">
                                                        <option selected>Pilih Jurusan</option>
                                                        @foreach ($jurusan as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nama_jurusan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama Kelas:</label>
                                                    <input type="text" class="form-control" placeholder="example: Teknik" id="recipient-name"
                                                        name="nama_kelas" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jumlah Siswa:</label>
                                                    <input type="number" class="form-control" placeholder="example: 10" id="recipient-name"
                                                        name="jumlah_siswa" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"><i class="ti-save" data-toggle="tooltip" title="ti-save"></i> Save</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    &nbsp;
                    &nbsp;
                    {{-- <a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title=""
                        data-placement="bottom" data-original-title="Support">
                        <span>
                            <i class="fe fe-download"> Download</i>
                        </span>
                    </a> --}}
                </div>
            </div>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">No</th>
                                        <th class="wd-15p">Nama Jurusan</th>
                                        <th class="wd-15p">Nama Kelas </th>
                                        <th class="wd-15p">Jumlah Siswa </th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->jurusan->nama_jurusan }}</td>
                                            <td>{{ $item->nama_kelas }}</td>
                                            <td>{{ $item->jumlah_siswa }}</td>
                                            <td>
                                                <button class="btn btn-dark btn-sm"><i class="ion-compose" data-toggle="tooltip" title="ti-pencil"></i> Edit</button>
                                                <button class="btn btn-danger btn-sm"><i class="ti-trash" data-toggle="tooltip" title="ti-trash"> </i> Delete</button>
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
