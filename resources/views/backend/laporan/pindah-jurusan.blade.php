@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
    <br>
    <div class="container-fluid mt-2">
        <div class="font-weight-bold text-black">
            <p class="fs-30 mb-0">Pindah Jurusan</p>
            <span></span>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-sm-5 mb-2 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img width="130" src="{{ Storage::url($data->foto) }}">
                                <div class="mt-3">
                                    <h4 class="text-black font-weight-bold"></h4>
                                    <p>SMK PARADUTA BANGSA TANGERANG SELATAN</p>
                                    <p><span class="font-weight-bold">{{ $data->nama_calon_siswa }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card">
                        <h5 class="card-header fs-18 font-weight-bold text-white bg-warning">Edit Jurusan</h5>
                        <div class="card-body">
                            <form action="{{ route('laporanPindahJurusanUpdate', $data->id) }}"
                                class="fs-14 needs-validation" novalidate method="post">
                                @csrf
                                <h4>Data Jurusan</h4>
                                <div class="row mb-2">
                                    <label for="nama_calon_siswa"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Jurusan
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"class="form-control " placeholder="Nama Siswa"
                                            value="{{ $data->jurusan->nama_jurusan }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="nama_calon_siswa"
                                        class="col-sm-3 text-right col-form-label font-weight-bold">Kelas
                                        <span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text"class="form-control " placeholder="Nama Siswa"
                                            value="{{ $data->kelas->nama_kelas }}" readonly>
                                    </div>
                                </div>
                                <hr>
                                <h4>Ubah Jurusan</h4>

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
                                    <label for="kelas_id" class="col-sm-3 text-right col-form-label font-weight-bold">Kelas
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

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-dark btn-sm"><i
                                            class="fa fa-redo mr-2"></i>Perbarui Jurusan</button>
                                    <a href="{{ route('laporan-calon-siswa') }}" type="submit"
                                        class="btn btn-outline-danger btn-sm"><i class="fa fa-redo mr-2"></i>Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
