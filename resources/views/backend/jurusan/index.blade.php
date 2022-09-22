@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">

        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title">Jurusan</h1>
            <div class="ml-auto">
                <div class="input-group">
                    <!-- Button trigger modal -->
                    @if (Auth::user()->user_role === 'admin' || Auth::user()->user_role === 'panitia')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <span>
                                <i class="fe fe-plus"><strong> Create</strong></i>
                            </span>
                        </button>
                    @endif

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                @if (Auth::user()->user_role != 'siswa')
                                    <div class="modal-header bg-dark">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Jurusan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="modal-body">
                                    <form action="{{ route('jurusan-store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Kode Jurusan:</label>
                                                    <input type="text" class="form-control" placeholder="example: TK"
                                                        id="recipient-name" name="kode_jurusan" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama Jurusan:</label>
                                                    <input type="text" class="form-control" placeholder="example: Teknik"
                                                        id="recipient-name" name="nama_jurusan" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
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
                                        <th class="wd-15p">Kode Jurusan</th>
                                        <th class="wd-15p">Nama Jurusan</th>
                                        <th class="wd-25p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kode_jurusan }}</td>
                                            <td>{{ $item->nama_jurusan }}</td>
                                            <td>
                                                @if (Auth::user()->user_role === 'admin' || Auth::user()->user_role === 'panitia')
                                                    <button class="btn btn-dark btn-sm"><i class="ion-compose"
                                                            data-toggle="tooltip" title="ti-pencil"></i> Edit</button>
                                                    <form action="{{ route('jurusan-delete', $item->id) }}" class="d-inline" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm"  onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS ?')"><i class="ti-trash"
                                                                data-toggle="tooltip" title="ti-trash"> </i> Delete</button>
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
