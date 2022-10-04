@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
    <br>
    <div class="container-fluid mt-2">
        <div class="font-weight-bold text-black">
            <p class="fs-30 mb-0">Update Data User</p>
            <span></span>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-sm-5 mb-2 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img  width="130" src="{{ asset('assets/img/undraw_profile.svg') }}">
                                <div class="mt-3">
                                    <h4 class="text-black font-weight-bold"></h4>
                                    <p>SMK PARADUTA BANGSA TANGERANG SELATAN</p>
                                    <p><span class="font-weight-bold">{{Auth::user()->name}}</span></p>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Ganti Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card">
                        <h5 class="card-header fs-18 font-weight-bold text-white bg-warning">Edit User</h5>
                        <div class="card-body">
                            <form action="{{ route('edit-profile', $data->id) }}" class="fs-14 needs-validation"
                                novalidate method="post">
                                @csrf
                                <div>
                                    <label class="form-label font-weight-bold">Nama</label>
                                    <input type="text" name="name" value="{{ $data->name }}" class="form-control"
                                        autocomplete="off" required />
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">Email</label>
                                    <input type="email" name="email" value="{{ $data->email }}" class="form-control"
                                        autocomplete="off" required />
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}"
                                        class="form-control" autocomplete="off" required />
                                    @error('jenis_kelamin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">Alamat</label>
                                    <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control"
                                        autocomplete="off" required />
                                    @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">No Telp</label>
                                    <input type="number" name="no_telepon" value="{{ $data->no_telepon }}"
                                        class="form-control" autocomplete="off" required />
                                    @error('no_telepon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}"
                                        class="form-control" autocomplete="off" required />
                                    @error('tempat_lahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" value={{ $data->tanggal_lahir }}
                                        class="form-control" autocomplete="off" required />
                                    @error('tanggal_lahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label class="form-label font-weight-bold">User Role</label><br>
                                    <input type="radio" {{ $data->user_role == 'panitia' ? 'checked' : '' }}
                                        name="user_role" value="panitia">
                                    <label for="customRadioInline1">Panitia</label>

                                    <input type="radio" {{ $data->user_role == 'tu' ? 'checked' : '' }} name="user_role"
                                        value="tu">
                                    <label for="customRadioInline1">Tu</label>

                                    <input type="radio" {{ $data->user_role == 'kepalasekolah' ? 'checked' : '' }}
                                        name="user_role" value="kepalasekolah">
                                    <label for="customRadioInline1">Kepala Sekolah</label>

                                    <input type="radio" {{ $data->user_role == 'siswa' ? 'checked' : '' }}
                                        name="user_role" value="siswa">
                                    <label for="customRadioInline1">Siswa</label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-dark btn-sm"><i
                                            class="fa fa-redo mr-2"></i>Perbarui Akun</button>
                                    <a href="{{ route('register-user') }}" type="submit"
                                        class="btn btn-outline-danger btn-sm"><i class="fa fa-redo mr-2"></i>Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white fs-18">Ganti Password</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update-password', Auth::user()->id) }}" class="fs-14 needs-validation"
                        novalidate method="post">
                        @csrf
                        <div>
                            <label for="password" class="form-label font-weight-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                autocomplete="off" required />
                        </div>
                        <div class="mt-2">
                            <label for="confirm_password" class="form-label font-weight-bold">Konfirmasi Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                autocomplete="off" required />
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-redo mr-2"></i>Perbarui
                                Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
