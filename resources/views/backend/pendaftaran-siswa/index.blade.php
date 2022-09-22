@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
    <div class="side-app ">
        <div class="card mt-4 ">
            @if ($formPendaftaran->status_id === 1)
                <h3 class="text-center py-4">Form Pembayaran Formulir Pendaftaran</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Form Upload Bukti Transfer</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/img/mandiri.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Atas Nama :</h4>
                                        <p>Yayasan Bangsa Serpong</p>
                                        <br>
                                        <h4>No Rekening :</h4>
                                        <p>3283283823</p>
                                        <br>
                                        <h4>Kode Bank :</h4>
                                        <p>014 - Mandiri</p>
                                        <br>
                                        <h4>Jumlah Yang Harus di Transfer :</h4>
                                        <strong>Rp. 100.319-,</strong>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('upload1') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="card-title">Form Upload Bukti Transfer</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_calon_siswa" class="col-sm-3 font-weight-bold">Upload Bukti
                                                    Transfer
                                                    <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="bukti_transfer_1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-6 mb-2">
                                            <button type="button" class="btn btn-block btn-danger "><i
                                                    class="fa fa-arrow-left mr-2"></i>Back</button>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <button type="submit" class="btn btn-primary btn-block"
                                                onclick="return confirm('Data yang di masukan sudah benar ?')"><i
                                                    class="ti-save" data-toggle="tooltip" title="ti-save"></i>&nbsp;
                                                Submit</button>
                                        </div>
                                        {{-- <button class="d-none" type="submit" id="buttonForm"></button> --}}
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            @elseif ($formPendaftaran->status_id === 2)
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/smk-bisa.png') }}" width="10%" alt="">
                    <hr>
                    <h5><span class="badge badge-warning  mr-1 mb-1 mt-1">Tunggu Konfirmasi !</span>
                    </h5>
                    <h3> Terima Kasih <strong><u>{{ $formPendaftaran->nama_calon_siswa }}</u></strong> Sudah Membayar
                        Formulir Pendaftaran</h3>
                    <h5>Silahkan tunggu 1x24 Jam untuk konfirmasi</h5>
                    <br>
                </div>
            @elseif ($formPendaftaran->status_id === 3)
                <form method="POST" action="{{ route('store-form-pendaftaran') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold text-black">Form Pendaftaran</h3>
                        <br>
                        <br>
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="status_id" value="">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <label for="nama_calon_siswa"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Nama
                                        SIswa
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_calon_siswa" class="form-control "
                                            placeholder="Nama Siswa" required>
                                        @error('nama_calon_siswa')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="ijazah" class="col-sm-3 text-right col-form-label font-weight-bold">Ijazah
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" name="ijazah" class="form-control" required>
                                        @error('ijazah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="skhun" class="col-sm-3 text-right col-form-label font-weight-bold">Skhun
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" name="skhun" class="form-control" required>
                                        @error('skhun')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="foto" class="col-sm-3 text-right col-form-label font-weight-bold">Foto
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" required>
                                        @error('foto')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="asal_sekolah"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Asal Sekolah
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="asal_sekolah" class="form-control "
                                            placeholder="Asal Sekolah" required>
                                        @error('asal_sekolah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <label for="tahun_lulus"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Tahun Lulus
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="number" name="tahun_lulus" class="form-control "
                                            placeholder="Tahun Lulus" required>
                                        @error('tahun_lulus')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="jurusan_id"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Jurusan
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select class=" form-control  r-0 light" id="jurusan_id" name="jurusan_id">
                                            <option readonly>Pilih Jurusan</option>
                                            @foreach ($jurusan as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->nama_jurusan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="kelas_id"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Kelas
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select class=" form-control  r-0 light" id="kelas_id" name="kelas_id">
                                            <option readonly>Pilih Kelas</option>
                                        </select>
                                        @error('kelas_id')
                                            <label class="text-danger">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="no_telp_siswa"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">No Telp Siswa
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="number" name="no_telp_siswa" class="form-control "
                                            placeholder="Tahun Lulus" required>
                                        @error('no_telp_siswa')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="nama_orang_tua"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Nama
                                        Orang Tua
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_orang_tua" class="form-control " required
                                            placeholder="Nama Orang Tua">
                                        @error('nama_orang_tua')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="no_telp_orang_tua"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">No Telp Orang Tua
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="number" name="no_telp_orang_tua" class="form-control "
                                            placeholder="No Telp Orang Tua" required>
                                        @error('no_telp_orang_tua')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div>
                            <strong>Note:</strong>
                            <ol>
                                <li>Untuk Upload Ijazah,Skhun dan foto Berbentuk - Jpg, Jpeg dan Png.</li>
                                <li>Untuk Foto Yang di upload berlatar belakang merah.</li>
                                <li>Maximal file Upload tidak boleh melebihi 2 mb.</li>
                            </ol>
                        </div>
                        <div class="container col-md-3">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <button type="button" class="btn btn-block btn-danger "><i
                                            class="fa fa-arrow-left mr-2"></i>Back</button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        onclick="return confirm('Data yang di masukan sudah benar ?')"><i class="ti-save"
                                            data-toggle="tooltip" title="ti-save"></i>&nbsp; Submit</button>
                                </div>
                                {{-- <button class="d-none" type="submit" id="buttonForm"></button> --}}
                            </div>
                        </div>
                    </div>
                </form>
            @elseif ($formPendaftaran->status_id === 4)
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/smk-bisa.png') }}" width="10%" alt="">
                    <hr>
                    <h5><span class="badge badge-warning  mr-1 mb-1 mt-1">Tunggu Konfirmasi !</span>
                    </h5>
                    <h3> Terima Kasih <strong><u>{{ $formPendaftaran->nama_calon_siswa }}</u></strong> Sudah Melengkapi
                        Data Pendaftaran</h3>
                    <h5>Silahkan tunggu 1x24 Jam untuk konfirmasi</h5>
                    <br>
                </div>
            @elseif ($formPendaftaran->status_id === 5)
                <h3 class="text-center py-4">Form Pembayaran Pendaftaran</h3>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Form Upload Bukti Transfer</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('assets/img/mandiri.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h4>Atas Nama :</h4>
                                        <p>Yayasan Bangsa Serpong</p>
                                        <br>
                                        <h4>No Rekening :</h4>
                                        <p>3283283823</p>

                                        <br>
                                        <h4>Kode Bank :</h4>
                                        <p>014 - Mandiri</p>

                                        <br>
                                        <h4>Rincian Biaya :</h4>
                                        <ol>
                                            <li>Pendaftaran</li>
                                            <li>Uang Pangkal</li>
                                        </ol>
                                        <br>
                                        <h4>Total Yang Harus Dibayarkan :</h4>
                                        <p><strong>Rp. 200.203-,</strong></p>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('upload2') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="card-title">Form Upload Bukti Transfer</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_calon_siswa" class="col-sm-3 font-weight-bold">Upload
                                                    Bukti
                                                    Transfer
                                                    <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="bukti_transfer_2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-6 mb-2">
                                            <button type="button" class="btn btn-block btn-danger "><i
                                                    class="fa fa-arrow-left mr-2"></i>Back</button>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <button type="submit" class="btn btn-primary btn-block"
                                                onclick="return confirm('Data yang di masukan sudah benar ?')"><i
                                                    class="ti-save" data-toggle="tooltip" title="ti-save"></i>&nbsp;
                                                Submit</button>
                                        </div>
                                        {{-- <button class="d-none" type="submit" id="buttonForm"></button> --}}
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            @elseif ($formPendaftaran->status_id === 6)
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/smk-bisa.png') }}" width="10%" alt="">
                    <hr>
                    <h5><span class="badge badge-warning  mr-1 mb-1 mt-1">Tunggu Konfirmasi !</span>
                    </h5>
                    <h3> Terima Kasih <strong><u>{{ $formPendaftaran->nama_calon_siswa }}</u></strong> Sudah Membayar
                        Pendaftaran</h3>
                    <h5>Silahkan tunggu 1x24 Jam untuk konfirmasi</h5>
                    <br>
                </div>
            @elseif ($formPendaftaran->status_id === 7)
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/smk-bisa.png') }}" width="10%" alt="">
                    <hr>
                    <h5><span class="badge badge-success  mr-1 mb-1 mt-1">Diterima !</span>
                    </h5>
                    <h3> Selamat <strong><u>{{ $formPendaftaran->nama_calon_siswa }}</u></strong> Diterima di SMK
                        PARADUTA BANGSA.</h3>
                    <h5>Silahkan tunggu info selanjutnya, yang akan di hubungi oleh tim dari SMK PARADUTA BANGSA.</h5>
                    <br>
                    <h3>Terima Kasih :)</h3>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('script')

    <script>
        $(document).ready(function() {
            let kelasId = $('#jurusan_id option:selected').val()
            if (kelasId != '') {
                $.ajax({
                    url: '/backend/getKelas/' + kelasId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data, 'data2')
                        $.each(data, function(value, key) {
                            $('select[name="kelas_id"]').append('<option value="' + key + '">' +
                                value + '</option>')
                        })
                    }
                })
            }

            $('select[name="jurusan_id"]').on('change', function() {
                var kelasId = $(this).val();
                console.log(kelasId, 'kelasId')
                if (kelasId) {
                    $.ajax({
                        url: '/backend/getKelas/' + kelasId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('select[name="kelas_id"]').empty();
                            $.each(data, function(value, key) {
                                console.log(key, 'value')
                                if (key.jumlah_siswa != 0) {
                                    $('select[name="kelas_id"]').append(
                                        '<option value="' +
                                        key.id + '">' + key.nama_kelas +
                                        ' | Kouta :' + key.jumlah_siswa +
                                        '</option>.')
                                }

                                // if(key.jumlah_siswa != 0) {
                                //     $('select[name="kelas_id"]').append('<option value="' +
                                //     key.id + '">' + key.nama_kelas  + ' | Kouta :' +key.jumlah_siswa+ '</option>')
                                // }else{
                                //     $('select[name="kelas_id"]').append('<option disabled="' +
                                //     key.id + '">' + key.nama_kelas  + ' | Kouta :' +key.jumlah_siswa+ '</option>')
                                // }
                            })
                        }
                    })
                }
                // else {
                //     console.log(
                //     $('select[name="kelas_id"]').empty(),'gatau'

                //     )
                // }
            })
        })
    </script>
@endsection
