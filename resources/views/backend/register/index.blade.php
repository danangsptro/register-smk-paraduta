@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')

    <div class="side-app">

        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title">Register User</h1>
            <div class="ml-auto">
                <div class="input-group">
                    <!-- Button trigger modal -->
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
                                    <h5 class="modal-title" id="exampleModalLabel">Create Register User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store-register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        placeholder="jhone" required name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        placeholder="jhone@example.com" required name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Jenis
                                                        Kelamin:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        name="jenis_kelamin" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        placeholder="jl.mawar" required name="alamat">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>User Role</label>
                                                <select class="custom-select" id="inputGroupSelect01" name="user_role">
                                                    <option selected>Pilih Option</option>
                                                    <option value="panitia">Panitia</option>
                                                    <option value="tu">TU - Tata Usaha</option>
                                                    <option value="kepalasekolah">Kelapa Sekolah</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">No Telp:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        placeholder="0812xxxxxxx" required name="no_telepon">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        name="tempat_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Tanggal
                                                        Lahir:</label>
                                                    <input type="date" class="form-control" id="recipient-name"
                                                        name="tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                                    <input type="text" class="form-control" id="recipient-name"
                                                        name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Email</th>
                                        <th class="wd-15p">Jenis Kelamin</th>
                                        <th class="wd-10p">Alamat</th>
                                        <th class="wd-25p">User Role</th>
                                        <th class="wd-25p">No Telp</th>
                                        <th class="wd-25p">Tempat Lahir</th>
                                        <th class="wd-25p">Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                @if ($item->user_role === 'admin')
                                                    <span class="badge badge-primary  mr-1 mb-1 mt-1">
                                                        {{ $item->user_role }}
                                                    </span>
                                                @elseif ($item->user_role === 'tu')
                                                    <span class="badge badge-warning  mr-1 mb-1 mt-1">
                                                        {{ $item->user_role }}
                                                    </span>
                                                @elseif ($item->user_role === 'panitia')
                                                    <span class="badge badge-dark  mr-1 mb-1 mt-1">
                                                        {{ $item->user_role }}
                                                    </span>
                                                @elseif($item->user_role === 'kepalasekolah')
                                                    <span class="badge badge-info  mr-1 mb-1 mt-1">
                                                        {{ $item->user_role }}
                                                    </span>
                                                @elseif ($item->user_role === 'siswa')
                                                    <span class="badge badge-light  mr-1 mb-1 mt-1">
                                                        {{ $item->user_role }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $item->no_telepon  ?? '-' }}</td>
                                            <td>{{ $item->tempat_lahir }}</td>
                                            <td>{{ $item->tanggal_lahir }}</td>
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
